function playPause() {
    if (video.paused)
        video.play();
    else
        video.pause();
}
function grande() {
    video.width = 560;
}
function pequeno()
{
    video.width = 320;
}
function normal() {
    video.width = 420;
}