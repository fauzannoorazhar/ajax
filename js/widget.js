$(document).ready(function(){

	//$('#formHere').load('form.php');

	// Call function manage data
	manageData();

	/**
     * A method for get data from json
     *
     * @result data form json and update rows
     */
	function manageData() {
	    $.ajax({
	        dataType: 'json',
	        type: 'GET',
	        url: 'api/getData.php',
	    }).done(function(data){
	    	//console.log(data);
	    	manageRow(data);
	    });
	}

	/* Get Page Data*/
	function getData() {
		$.ajax({
	    	dataType: 'json',
	    	url: 'api/getData.php'
	    	/*success: function(data) {
	    		console.log(data);
	    	}*/
		}).done(function(data) {
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
		  	rows += '<tr>';
		  	rows += '<td class="text-center">'+ no +'</td>';
		  	rows += '<td>'+value.nama+'</td>';
		  	rows += '<td>'+value.email+'</td>';
		  	rows += '<td data-id="'+value.id+'">';
		  	rows += '<button id="btnUpdate" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update">Update</button> ';
		  	rows += '<button class="btn btn-danger" id="btnDelete">Delete</button>';
		  	rows += '</td>';
		  	rows += '</tr>';
		  	no++;
		});

		$("tbody").html(rows);
	}

	/**
     * var url = action url to create.php
     * var nama = get value from attribute nama
     * var email = get value from attribute email
     * preventDefault() = stop the browser from submitting the form
     *
     * @return post data to create data
     */
    $('#createData').click(function(e){

		var nama = $('input[name="nama"]').val();
		var email = $('input[name="email"]').val();

    	// Stop the browser from submitting the form
    	e.preventDefault();

		$.ajax({
			dataType: 'json',
			type: 'POST',
			url: 'api/create.php',
			data: {nama: nama, email: email},
			success: function (data) {
				console.log(data);
			}
		}).done(function(data) {
			$("#modal-create").find("input[name='nama']").val('');
            $("#modal-create").find("input[name='email']").val('');
			getData();
			$(".modal").modal('hide');
		});
    });

	/**
	 * var nama, email, id = get text from each element 
	 * example = <div class="example">Lorem Ipsum Dolor Sit Amet</div>
	 * $(".example").text() return Lorem Ipsum Dolor Sit Amet
	 */
	$('body').on("click", "#btnUpdate", function(){

	    var nama = $(this).parent("td").prev("td").prev("td").text();
	    var email = $(this).parent("td").prev("td").text();
	    var id = $(this).parent("td").data('id');

	    $('#modal-update').find('input[name="nama"]').val(nama);
	    $('#modal-update').find('input[name="email"]').val(email);
	    $('#modal-update').find('input[name="id"]').val(id);

	    //console.log(id);
	});

	/* Updated new Item */
    $('#updateData').click(function(e){
        // Stop the browser from submitting the form
    	e.preventDefault();
        var nama = $("#modal-update").find('input[name="nama"]').val();
		var email = $("#modal-update").find('input[name="email"]').val();

		var id = $("#modal-update").find("input[name='id']").val();

        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: 'api/update.php',
            data: {
            	nama:nama, 
            	email:email, 
            	id:id
            }
        }).done(function(data) {
        	getData();
        	$(".modal").modal('hide');
        	//console.log(data);
        });

    });

	/**
     * When click #btnDelete delete data
     * var id = get value id from parent td in data('id')
     * var row = get tr and then remove the row
     *
     * @return remove row and delete data
     */
	$('body').on("click", "#btnDelete", function(){
		var id = $(this).parent("td").data('id');
		var row = $(this).parents("tr");
		$.ajax({
			dataType: 'json',
			type: 'POST',
			url: 'api/delete.php',
			data: {
				id: id
			}
		}).done(function(){
			row.remove();
		});
	});

});

/*$('body').on("click", "#btnUpdate", function(){
		var id = $(this).parent("td").data('id');

	    var nama = $(this).parent("td").prev("td").prev("td").text();
	    var email = $(this).parent("td").prev("td").text();

	    $('form').find('input[name="nama"]').val(nama);
	    $('form').find('input[name="email"]').val(email);
	    $('form').find("#btnUpdate").val(id);

	    $('#tambahData').hide();
	    $('#show-btn-sunting').html(btnSunting);
	});

	function updateData() {
		var nama = $('input[name="nama"]').val();
		var email = $('input[name="email"]').val();
		var id = $('form').find("#btnUpdate").val();

		//evt.preventDefault();
		$.ajax({
			dataType: 'json',
			type: 'POST',
			url: 'api/update.php',
			data: {nama: nama, email: email, id:id}
		});
	}*/

/*$('form').submit(function(evt) {
	evt.preventDefault();
	var url = $(this).attr("action");
	var formData = $(this).serialize();
	$.post(url, formData, function(response){
		//console.log(response);
		//console.log(formData);
		$('#signup').html('<p> Signing up successfully! Thanks</p>');
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