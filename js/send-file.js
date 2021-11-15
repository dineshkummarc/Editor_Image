document.getElementById('readUrl').addEventListener('change', function(){
    if (this.files[0] ) {
      var picture = new FileReader();
      picture.readAsDataURL(this.files[0]);
      picture.addEventListener('load', function(event) {
        document.getElementById('img_editor').setAttribute('src', event.target.result);
        document.getElementById('img_editor').style.display = 'block';
    });
  }
});