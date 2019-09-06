
function keluar_sistem() {
	var content = 'Yakin mau Keluar Sistem?';
	var title = '<b>PERINGATAN</b>';
	var footer = '<button type="button" class="btn btn-modal-close btn-danger" data-dismiss="modal">Tidak</button><button type="button" class="btn btn-success" onclick="window.location.href = \'' + site + 'user/logout\'">Yakin</button>';

	setModalBox(title, content, footer);

	$('#myModalz').modal('show');
}

function batalkan(url) {
	var content = 'Yakin mau Batalkan?';
	var title = '<b>PERINGATAN</b>';
	var footer = '<button type="button" class="btn btn-modal-close btn-danger" data-dismiss="modal">Tidak</button><button type="button" class="btn btn-success" onclick="window.location.href = \'' + url + '\'">Yakin</button>';

	setModalBox(title, content, footer);

	$('#myModalz').modal('show');
}

function show_sukses(url) {
	var content = 'Data berhasil disimpan';
	var title = '<b>SUKSES</b>';
	var footer = '';

	setModalBox(title, content, footer);

	$('#myModalz').modal('show');
}

function confirm_del(p1, p2, teks) {
	var content = '<b>' + teks + '</b><br>Yakin mau Hapus Data ini?';
	var title = '<b>PERINGATAN</b>';
	var footer = '<button type="button" class="btn btn-modal-close btn-danger" data-dismiss="modal">Tidak</button><button type="button" class="btn btn-success" onclick="hapus_data(\'' + p1 + '\',\'' + p2 + '\'); hideModal();">Yakin</button>';

	setModalBox(title, content, footer);

	$('#myModalz').modal('show');
}

function myconfirm(title, teks, call) {
	// alert('cekkkk');
	var title = '<b>' + title + '</b>';
	var content = teks;
	var footer = '<button type="button" class="btn btn-modal-close btn-danger" data-dismiss="modal" onclick"hideModal(); setbdy();">Tidak</button><button type="button" class="btn btn-success" onclick="' + call + '; hideModal(); return false;">Ya</button>';

	setModalBox(title, content, footer);

	$('#myModalz').modal('show');
}

function mynotif(title, teks) {
	var title = '<b>' + title + '</b>';
	var content = '<b>' + teks + '</b>';
	var footer = '<button type="button" class="btn btn-modal-close btn-primary" data-dismiss="modal" onclick"hideModal(); setbdy();">Oke</button>';

	setModalBox(title, content, footer);

	$('#myModalz').modal('show');
}

function myloadingModal() {
	$('#myModalz').modal('show');

	$('#label-modal').html('');
	$('#modal-utama').html('<h3>Loading...<h3>');
	$('#modal-bawah').html('');
	$('#myModalz').data('bs.modal').options.backdrop = 'static';
	$('#myModalz').modal({ backdrop: 'static', keyboard: false });
}

function setModalBox(title, content, footer) {
	$('#label-modal').html(title);
	$('#modal-utama').html(content);
	$('#modal-bawah').html(footer);

	// $('#myModal').attr('class', 'modal fade bs-example-modal-sm').attr('aria-labelledby','mySmallModalLabel');
	// $('.modal-dialog').attr('class','modal-dialog modal-sm');

	// # karena ada popup modal butuh popup modal konfirmasi
	$('#myModalz').attr('class', 'modal fade bs-example-modal-sm').attr('aria-labelledby', 'mySmallModalLabel');
	$('.myModalz-dialog').attr('class', 'modal-dialog modal-sm');
}

function hideModal() {
	$('#myModalz').modal('hide');
	
	// test
	$('.modal-backdrop').remove();

	// #tidak bekerja ? belum berhasil
	$('body').css('padding-right', '0px');
	$('.mybd').removeAttr('style');
	$('.mybd').attr('style', '');
	$('.mybd').attr('style', 'padding-right: 0px !important;');
}

function setbdy() {
	// $('.modal-backdrop').remove();

	$('body').css('padding-right', '0');
	$('.mybd').attr('style', 'padding-right: 0 !important;');

	$('.mybd').removeAttr('style');
	$('body').css("padding-right", "0px");
}

// $('.btn-modal-close, .modal').on("click", function (e) {
//   	var activeBackdrop = 'modal-backdrop';
//   	$('#modal-backdrop').removeClass(activeBackdrop);
// 	$(".modal-backdrop").remove();
// });


function setMsg(text) {
	$('#alert-div').html('<div id="alert-on" class="alert alert-error" style="display: none;"><button type="button" class="close" data-dismiss="alert">&times;</button>' + text + '</div>');

	$('#alert-on').show();

	goDivOn('alert-div');
}

function goDivOn(idcon, plus) {
	if (plus != undefined) {
		var offsetme = eval(plus);
	}
	else {
		var offsetme = 75;
	};

	$('html, body').animate({ scrollTop: $("#" + idcon).offset().top - offsetme }, 2000);
}

function checkSize() {
	if ($(window).width() < 767) {
		$('.logo-lg > b').html('<?php echo $namaSet ?>');
	}
	else {
		$('.logo-lg > b').html('<?php echo $namaSet ?>');
	}
}

function changetoDecimal(n) {
	var n = n.replace(/[^0-9\,]/g, '');
	var t = n.split(',');
	var h = t[0].toString() + '|' + t[1].toString();
	return h;
}

function hitungKali(a, b) {
	var t = a.split(',');
	t[0] = t[0].replace(/[^0-9\,]/g, '');

	var k1 = k2 = 0;

	if (t[1]) {
		k1 = t[1].length;
		var p1 = k1 > 0 ? Math.pow(10, k1) : 1;
	}
	else var p1 = 1;

	var angka1 = parseInt(t[0] + t[1]);

	var t2 = b.split(',');
	t2[0] = t2[0].replace(/[^0-9\,]/g, '');

	if (t2[1]) {
		k2 = t2[1].length;
		var p2 = k2 > 0 ? Math.pow(10, k2) : 1;
	}
	else var p2 = 1;

	var angka2 = parseInt(t2[0] + t2[1]);

	var koma = k1 > k2 ? k1 : k2;

	var h = angka1 * angka2 / (p1 * p2);
	h = h.toFixed(koma);
	h = h.replace('.', ',');

	return h;
}

function jumlahkanAngka(a, b) {
	if (!a || !b) return;

	var t = a.split(',');
	t[0] = t[0].replace(/[^0-9\,]/g, '');

	var k1 = k2 = 0;

	if (t[1]) {
		k1 = t[1].length;
		var p1 = k1 > 0 ? Math.pow(10, k1) : 1;
	}
	else var p1 = 1;

	var angka1 = parseInt(t[0] + t[1]);

	var t2 = b.split(',');
	t2[0] = t2[0].replace(/[^0-9\,]/g, '');

	if (t2[1]) {
		k2 = t2[1].length;
		var p2 = k2 > 0 ? Math.pow(10, k2) : 1;
	}
	else var p2 = 1;

	var angka2 = parseInt(t2[0] + t2[1]);

	var koma = k1 > k2 ? k1 : k2;

	var h = (angka1 + angka2) / (p1 * p2);
	h = h.toFixed(koma);

	return h;
}


function validateNumber(event) {
	// if (str.indexOf(".") >= 0)
	this.value = this.value.replace(/[^0-9\,]/g, '');
};

function numKomaReMask(num) {
	return num.replace(",", ".");
}