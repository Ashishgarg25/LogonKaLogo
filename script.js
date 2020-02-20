//particlesJS("particles-js", { "particles": { "number": { "value": 150, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#3c1053" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#a94c4c" }, "polygon": { "nb_sides": 5 }, "image": { "src": "img/github.svg", "width": 100, "height": 100 } }, "opacity": { "value": 0.11837308038321305, "random": false, "anim": { "enable": false, "speed": 12, "opacity_min": 0.1, "sync": false } }, "size": { "value": 2, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 7.99168864381043, "sync": false } }, "line_linked": { "enable": true, "distance": 144.22730222831194, "color": "#976BF2", "opacity": 0.7, "width": 0.9615153481887462 }, "move": { "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": true, "mode": "push" }, "size": { "value": "2" }, "resize": true }, "modes": { "grab": { "distance": 400, "line_linked": { "opacity": .7, "color": "#976BF2" } }, "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 }, "repulse": { "distance": 200, "duration": 0.4 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": true });
particlesJS("particles-js", { "particles": { "number": { "value": 111, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#976bf2" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 5 }, "image": { "src": "img/github.svg", "width": 100, "height": 100 } }, "opacity": { "value": 0.5, "random": false, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } }, "size": { "value": 3, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } }, "line_linked": { "enable": true, "distance": 144.30708547789706, "color": "#976bf2", "opacity": 0.4, "width": 1 }, "move": { "enable": true, "speed": 6.413648243462092, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": true, "mode": "bubble" }, "resize": true }, "modes": { "grab": { "distance": 194.89853095232286, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 167.83216783216784, "size": 9, "duration": 2.4775224775224776, "opacity": 0.8471528471528471, "speed": 3 }, "repulse": { "distance": 119.88011988011989, "duration": 0.4 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": true });
var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; }
    requestAnimationFrame(update);
};
requestAnimationFrame(update);;
var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; }
    requestAnimationFrame(update);
};
requestAnimationFrame(update);;

const ele = document.querySelector('.box1').onhover();
ele.classList.add('animated', 'bounce');