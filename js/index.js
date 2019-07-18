var projectMaxHeight = 350;
var inProjectFooter = false;
var inProjectBody = false;

function initProjects(int, project) {

    var body = $(project).find(".card-body");
    $(body).removeClass("minimized");
    var outerHeight = $(body).outerHeight(true);
    $(body).addClass("minimized");

    $(body).data("height", (outerHeight) + "px");

    if (outerHeight < projectMaxHeight) {
        //Styling for no expansion
        $(project).find(".expansion-arrow").css("display", "none");
        $(project).find(".card-body").removeClass("pointer collapsed");
        $(project).find(".card-footer").removeClass("pointer");
        //Remove listeners for no expansion
        $(project).find(".card-body").off("click", expandProject);
        $(project).find(".card-footer").off("click", expandProject);

        $(project).data("listeners", false);
    } else {
        //Styling for expansion
        $(project).find(".expansion-arrow").css("display", "");
        $(project).find(".card-body").addClass("pointer");
        $(project).find(".card-footer").addClass("pointer");
        //Listeners for expansion
        if (!$(project).data("listeners")) {
            $(project).find(".card-body").on("click", expandProject);
            $(project).find(".card-footer").on("click", expandProject);
        }
        $(project).data("listeners", true);
    }

    if ($(body).outerHeight(true) == projectMaxHeight) {
        $(body).addClass("collapsed");
    } else {
        $(body).css("max-height", "");
        $(body).closest(".card").find(".expansion-arrow .svg").css("transform", "rotate(0deg)");
    }

}

function rotate(element, angle) {
    var deg = element.data("deg") === undefined ? 0 : element.data("deg");

    deg = deg + angle;
    element.css("transform", "rotate(" + deg + "deg)");
    element.data("deg", deg);
}

function expandProject(event) {
    var card = $(event.target).closest(".card");

    var body = $(card).find(".card-body");
    if (projectMaxHeight < $(body).outerHeight()) { //if greater than max height, it is expanded
        $(body).css("max-height", "");
        $(body).addClass("collapsed");
    } else {
        $(body).css("max-height", body.data("height"));
        $(body).removeClass("collapsed");
    }
    rotate($(card).find(".card-footer .expansion-arrow .svg"), 180);

}

function onResize() {
    $(".projects .card").each(initProjects);
}

function initialProjectInit() {
    $(".projects .card").each(initProjects);
}

function updateInProjectBody(event) {
    inProjectBody = event.type === "mouseover";
    updateArrowStatus(event);
}

function updateInProjectFooter(event) {
    inProjectFooter = event.type === "mouseover";
    updateArrowStatus(event);
}

function updateArrowStatus(event) {
    if (inProjectFooter || inProjectBody) {
        $(event.target).closest(".card").find(".expansion-arrow .svg").css("animation-iteration-count", "infinite");
        $(event.target).closest(".card").find(".expansion-arrow .svg").addClass("bobbing");
    } else {
        $(event.target).closest(".card").find(".expansion-arrow .svg").css("animation-iteration-count", 1);
    }
}

function projectButtonClick(event) {
    event.stopPropagation();
}

//Checks if arrow is facing the right way. The best fix we can have for this problem for now
function arrowSanityCheck() {
    $(".projects .card").each(function (num, card) {
        var body = $(card).find(".card-body");
        var arrow = $(card).find(".expansion-arrow .svg");
        var deg = $(arrow).data("deg") === undefined ? 0 : $(arrow).data("deg");
        var maxHeight = $(body).css("max-height");

        var isDownCorrect = maxHeight === projectMaxHeight + "px" && deg % 360 == 0;
        var isUpCorrect = maxHeight === $(body).data("height") && deg % 360 != 0;

        if (!(isDownCorrect || isUpCorrect)) { //If incorrect arrow position
            rotate(arrow, 180);
            console.log("flip");
        }

    });
    setTimeout(arrowSanityCheck, 2000);
}

function activateOverlay(){
    $(".dim-overlay").addClass("active");
}

function deactivateOverlay(event = null){
    $(".dim-overlay").removeClass("active");
    var fullImages = $(".full-view");
    var cards = $(fullImages).closest(".card");
    $(fullImages).removeClass("full-view");
    $(cards).find(".language-set").css("display","");
}

function popThumbnail(event){
    var thumbnail = $(event.target).find(".thumbnail");
    var card = $(thumbnail).closest(".card");
    $(thumbnail).addClass("full-view");
    $(card).find(".language-set").css("display","none");
    activateOverlay();
    $(event.target).attr("data-full-view",true);
}

$(function () {

    var projectBodies = $(".projects .card .card-body");
    var projectFooters = $(".projects .card .card-footer");

    //Inject svg with svg image code for CSS manipulation
    var injectSVG = document.querySelectorAll('img.svg'); //All SVG's must have SVG class
    SVGInjector(injectSVG);

    setTimeout(initialProjectInit, 10);
    setTimeout(arrowSanityCheck, 2000);

    $(projectBodies).on("mouseover", updateInProjectBody);
    $(projectBodies).on("mouseleave", updateInProjectBody);
    $(projectFooters).on("mouseover", updateInProjectBody);
    $(projectFooters).on("mouseleave", updateInProjectBody);

    $(".projects .card .buttons button").on("click", projectButtonClick);
    $(".projects .card .card-img-top").on("click", popThumbnail);
    $(".dim-overlay").on("click",deactivateOverlay);


    $(window).on("resize", onResize);
});