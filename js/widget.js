$(document).ready(function(){

	$('#formHere').load('form.php');

	// Call function manage data
	manageData();

	/**
     * A method for get data from json
     *
     * @result
     */
	function manageData() {
	    $.ajax({
	        dataType: 'json',
	        url: 'api/getData.php',
	    }).done(function(data){
	    	//console.log(data);
	    	manageRow(data);
	    });
	}

	/**
     * A method for manage row table
     *
     * @param object $data
     *
     * @return row in html
     */
	function manageRow(data) {
		var	rows = '';
		var no = 1;
		$.each(data, function(key, value) {
		  	rows = rows + '<tr>';
		  	rows = rows + '<td class="text-center">'+ no +'</td>';
		  	rows = rows + '<td>'+value.nama+'</td>';
		  	rows = rows + '<td>'+value.email+'</td>';
		  	rows = rows + '</tr>';
		  	no++;
		});

		$("tbody").html(rows);
	}

	/*$('form').submit(function(event){
		var action = $(this).attr("action");
		var formData = $(this).serialize();

		$.ajax({
            dataType: 'json',
            type: 'POST',
            url: '../api/' + action,
            data: {nama:nama, email:email}
        }).done(function(data){
            console.log(data);
        });
	});*/

	/*var url = "../data/data.json";
	$.getJSON(url, function(employees){
		var rows = '';
		var no = 1;
		$.each(employees, function(index, data){
			rows += '<tr>';
			rows += '<td>' + no + '</td>';
			rows += '<td>' + data.nama + '</td>';
			rows += '<td>' + data.email + '</td>';
			rows += '</tr>';
		no++;
		});

		$("tbody").html(rows);
	});*/
});