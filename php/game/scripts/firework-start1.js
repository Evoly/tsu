export default (containerId) => {
    const Fireworks = window.Fireworks // browser global

    // needs at least a container element, you can provide options
    // (options are optional, defaults defined below)
    const container = document.getElementById(containerId);
    console.log('id:', containerId);
    console.log('width:', container.offsetWidth, 'height:', container.offsetHeight);
    
    const width = container.offsetWidth;
    const height = container.offsetHeight;

    // instantiate the class and call start
    // this returns a disposable - calling it will stop fireworks.
    const options = {
        maxRockets: 15, // max # of rockets to spawn
        rocketSpawnInterval: 50, // millisends to check if new rockets should spawn
        numParticles: 200, // number of particles to spawn when rocket explodes (+0-10)
        explosionMinHeight: 0.2, // percentage. min height at which rockets can explode
        explosionMaxHeight: 0.9, // percentage. max height before a particle is exploded
        explosionChance: 0.02, // chance in each tick the rocket will explode

        // array of points, defaults to []
        // when x is null or not defined, uses random position between 0 -> container width
        // when y is null or not defined, uses container height
        cannons: [{
            x: width * 0.2
        }, {
            x: width * 0.8
        }],

        // defines a single cannon with null for height and provided value for X.
        // will be apended to provided cannons
        rocketInitialPoint: width * 0.5,

    }

    const fireworks = new Fireworks(container, options);
    fireworks.start();
    //const stop = fireworks.start()
    //start();
    //stop() // stop rockets from spawning
    //fireworks.stop() // also stops fireworks.
    //fireworks.kill() // forcibly stop fireworks
    //fireworks.fire() // fire a single rocket.
    //fireworks.resetSize() // resets the size to the containers dimensions
    //fireworks.setSize(100, 100) // sets the size to the specified dimensions
    //fireworks.onFinish(() => container.remove()) // callback when the last firework disappears

}