const userLeft = false;
const userWatchingCatMeme = false;

function watchTutorialPromise() {
    return new Promise((resolve, reject) => {
        if (userLeft) {
            reject({
                name: 'User Left',
                message: ':('
            });
        } else if (userWatchingCatMeme) {
            reject({
                name: 'User Watching Cat Meme',
                message: 'WebDevSimplified < Cat'
            });
        } else {
            resolve('Thumbs up and Subscribe');
        }
    });
}

// Using the Promise-based approach
watchTutorialPromise()
    .then((message) => {
        console.log('Success: ' + message);
    })
    .catch((error) => {
        console.error(error.name + ' ' + error.message);
    });
