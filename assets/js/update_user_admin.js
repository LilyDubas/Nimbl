const updateButtons = document.getElementsByClassName('updateUser');

updateButtons.forEach(function(button){
  button.addEventListener('click', function(){
    var userId = (this.id).replace('update_', '');
    var mainTr = document.getElementById('mainUserInfo_' + userId);
    var formTr = document.getElementById('formUserInfo_' + userId);
    if (confirm('Voulez vous modifier cet utilisateur ?')){
      mainTr.style.display = 'none';
      formTr.style.display = 'table-row';
    }
  });
})
