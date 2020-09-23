//Proses java script untuk melakukan suatu perintah ketika terjadi tindakan pada suatu element
$( document ).ready(function(){
	getAllData();
	console.log("ready");
});
$("form#crudAppForm").on("submit",function (e){
	e.preventDefault();
	var name = $("#name").val();
	var email = $("#email").val();
	var contact = $("#contact").val();
	var editId = $("#editId").val();
	if (name == "") {
		alert("Masukkan nama terlebih dahulu");
		$("#name").focus();
	}else if (email == "") {
		alert("Masukkan email terlebih dahulu");
		$("#email").focus();
	}else if (contact == ""){
		alert("Masukkan contact terlebih dahulu");
		$("#contact").focus();
	}else{
		$("#buttonLabel").html("Menyimpan...");
		$("#spinnerLoader").show('fast');
		$.post("crud-script.php",{
			crudOperation:"saveData",
			name:name,
			email:email,
			contact:contact,
			editId:editId,
		},function(response){
			if (response == "saved") {
				$("#buttonLabel").html("Save");
				$("#spinnerLoader").hide('fast');
				$("#myModal").modal('hide');
				$("form#crudAppForm").each(function(){
					this.reset();
				});
				getAllData();
			}
		});
	}

});

function getAllData() {
	$.post("crud-script.php",{crudOperation:"getData"},function(allData){
		$("#crudData").html(allData);
	});
}

function editData(editId,name,email,contact){
	$("#editId").val(editId);
	$("#name").val(name);
	$("#email").val(email);
	$("#contact").val(contact);
	$("#myModal").modal('show');
}

function deleteData(deleteId){
	if (confirm("Apakah anda yakin akan menghapus ini?")) {
		$('#deleteSpinner'+deleteId).show('fast');
		$.post("crud-script.php",
		{crudOperation:"deleteData",deleteId:deleteId},function(response){
			if (response == "deleted") {
				$('#deleteSpinner'+deleteId).hide('fast');
				getAllData();
			}
		});
	}
}