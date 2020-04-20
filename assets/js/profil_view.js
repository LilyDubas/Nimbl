const deleteUserButton = document.getElementById('delete-user');

deleteUserButton.addEventListener('click', function(){
  if (confirm('Voulez vous supprimer votre compte ?')){
    var expiryDate = new Date();
    expiryDate.setTime(expiryDate.getTime() + (5 * 60 * 1000));
    document.cookie = 'deleteUser=true; expires=' + expiryDate.toUTCString() + '; path=/';
    window.location.href = '/';
  };
});
