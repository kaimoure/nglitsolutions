
// ekkolightbox
$(document).on("click", '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });


//   skill
const options = {
    cutoutPercentage: 65,
    animation: {
        easing: 'easeOutQuint' },

    animateScale: true,
    tooltips: {
        enabled: false },

    events: [] };


    const skills = [
    {
    id: "html5",
    values: [95, 5] },

    {
    id: "css3_sass",
    values: [90, 10] },

    {
    id: "jquery_javascript",
    values: [83, 17] },

    {
    id: "CMS",
    values: [85, 15] },

    {
    id: "bootstrap",
    values: [85, 15] },

    {
    id: "photoshop_illustrator",
    values: [95, 5] }];



    let offset = 0;

    for (const skill of skills) {
    const canvas = document.querySelector(`#${skill.id}`);
    if (!canvas) {continue;}

    const ctx = canvas.getContext('2d');

    setTimeout(() => {
        const chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
            data: skill.values,
            backgroundColor: [
            '#f44336',
            '#ecf0f1'] }] },



        options: options });

    }, offset);

    offset += 250;
    }
