
const video = document.getElementById('video');
const videoSource = document.getElementById('videoSource');
const inputFile = document.getElementById('file');

console.log('kk');


function handleInputChange() {
  const videoFile = inputFile.files[0];
  const videoSrc = URL.createObjectURL(videoFile);
  videoSource.src = videoSrc;
  video.load();
}


inputFile.addEventListener('change', handleInputChange);