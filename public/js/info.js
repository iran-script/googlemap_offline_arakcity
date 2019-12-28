$(function () 
{
	$('.table_1s').click(function(){
		$('.table_1s_chart').show();
			new Chart(document.getElementById("pie-charts"), {
		    type: 'pie',
		    data: {
		      labels: ["زیر 15 ", "15-18 ", "18-25 ", "25-35 ", "35-45 " , "45-55 " , "55-65 ","بیش از 65 "],
		      datasets: [{
		        label: "سن",
		        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd","#8e5ea2","#3cba9f"],
		        data: [159,80,164,237,265,163,31,8]
		      }]
		    },
		    options: {
		      title: {
		        display: true,
		        text: 'نمودار بر حسب سن'
		      }
		    }
          });

	});

	$('.close').click(function(){
		$('.table_1s_chart').hide();
	});

	$('.table_4s').click(function(){
		$('.table_4s_chart').show();
			new Chart(document.getElementById("pie-charts1"), {
		    type: 'pie',
		    data: {
		      labels: ["بیسواد ", "ابتدایی ", "راهنمایی ", "متوسطه  ", "عالی "],
		      datasets: [{
		        label: "سن",
		        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
		        data: [94,497,312,183,21]
		      }]
		    },
		    options: {
		      title: {
		        display: true,
		        text: 'تحصیلات'
		      }
		    }
          });

	});

	$('.close').click(function(){
		$('.table_4s_chart').hide();
	});
})