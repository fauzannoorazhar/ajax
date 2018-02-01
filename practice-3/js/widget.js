$(document).ready(function(){

	var url = "../data/data.json";
	$.getJSON(url, function(employees){
		var rows = '';
		var no = 1;
		$.each(employees, function(index, data){
			rows += '<tr>';
			rows += '<td>' + no + '</td>';
			rows += '<td>' + data.nama + '</td>';
			rows += '<td>' + data.hp + '</td>';
			rows += '<td>' + data.email + '</td>';
			rows += '<td>' + data.status + '</td>';
			rows += '</tr>';
		no++;
		});

		$("tbody").html(rows);
	});

	$('form').submit(function(event){
		event.preventDefault();
		var urlForm = $(this).attr("action");
		var formData = $(this).serialize();

		$.post(urlForm, formData, function(response){
			$('#signup').html("<p>Thanks for signing up!</p>");
		});
	});
});