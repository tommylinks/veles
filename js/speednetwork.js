npSpeedCheck = {
  start : function(){    
      npSpeedCheck.download.onload = function () {
      npSpeedCheck.endTime = (new Date()).getTime();
      npSpeedCheck.showResults();
    }
    npSpeedCheck.startTime = (new Date()).getTime();
    npSpeedCheck.download.src = npSpeedCheck.imageAddr;
  },
  endTime : null,
  startTime : null,
  imageAddr : "/omega/images/day/01.jpg",
  downloadSize : 615000,//size of the image
  download : new Image(),
  showResults: function() {
    var duration = (npSpeedCheck.endTime - npSpeedCheck.startTime) / 1000;
    var bitsLoaded = npSpeedCheck.downloadSize * 8;
    var speedMbps = (bitsLoaded / duration / Math.pow(1024, 2)).toFixed(2);

    console.log ('speedMbps', speedMbps);
    if (speedMbps != speedMbps || speedMbps === Infinity) {
      var speedMbps = 6;
    } 

    localStorage.removeItem('speedMbps');
    localStorage.setItem('speedMbps', speedMbps);

  }
}
npSpeedCheck.start();
