<<<<<<< HEAD
var data = {
	labels: ["Java", "Javascript", "SQL", "PHP", "Video Editing", "Photography", "Adobe Suite", "Microsoft Office", "Android Studio"],
=======
/*var skillsData = new Array (['Java', 7]), ['Javascript', 7], ['HTML/CSS', 8], ['PHP', 4], 
   ['Video Editing', 9], ['Photography', 6], ['Adobe Suite', 8], ['Microsoft Office', 9]);*/

var data = {
	labels: ["Java", "Javascript", "HTML/CSS", "PHP", "Video Editing", "Photography", "Adobe Suite", "Microsoft Office"],
>>>>>>> 1c9aa5789c4b408cbbbff25a64d39839038b35ee
	datasets: [
		{
			label: "My Skillset",
			fillColor: "rgba(8, 169, 154, 0.22)",
			strokeColor: "#08a99a",
			pointColor: "#5aa283",
			pointStrokeColor: "#5fa2a0",
			pointHighlightFill: "#08a99a",
			pointHighlightStroke: "#74c1aa",
<<<<<<< HEAD
			data: [7, 8, 6, 8, 9, 6, 8, 9, 6]
=======
			data: [7, 4, 8, 4, 9, 6, 8, 9]
>>>>>>> 1c9aa5789c4b408cbbbff25a64d39839038b35ee
		}
	]
}

var options = {
    //Boolean - Whether to show lines for each scale point
    scaleShowLine : true,

    //Boolean - Whether we show the angle lines out of the radar
    angleShowLineOut : true,

    //Boolean - Whether to show labels on the scale
    scaleShowLabels : false,

    // Boolean - Whether the scale should begin at zero
    scaleBeginAtZero : true,

    //String - Colour of the angle line
    angleLineColor : "rgba(0,0,0,.1)",

    //Number - Pixel width of the angle line
    angleLineWidth : 1,

    //String - Point label font declaration
    pointLabelFontFamily : "'Arial'",

    //String - Point label font weight
    pointLabelFontStyle : "normal",

    //Number - Point label font size in pixels
    pointLabelFontSize : 10,

    //String - Point label font colour
    pointLabelFontColor : "#666",

    //Boolean - Whether to show a dot for each point
    pointDot : true,

    //Number - Radius of each point dot in pixels
    pointDotRadius : 3,

    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth : 1,

    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius : 20,

    //Boolean - Whether to show a stroke for datasets
    datasetStroke : true,

    //Number - Pixel width of dataset stroke
    datasetStrokeWidth : 2,

    //Boolean - Whether to fill the dataset with a colour
    datasetFill : true,

    //String - A legend template
    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
}

var ctx = document.getElementById("skillsChart").getContext("2d");
var radarChart = new Chart(ctx).Radar(data, options);