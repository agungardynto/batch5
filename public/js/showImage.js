$('#browse').change(function () {
    if (this.files[0]) {
        var reader = new FileReader;
        reader.onload = function (e) {
            $('#foto').attr('src', e.target.result)
        }
        reader.readAsDataURL(this.files[0]);
    }
})
