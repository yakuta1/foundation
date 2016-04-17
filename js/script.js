$(document).ready(function(){
   //show Loader Image
   $("#loaderImage").show(); 
    
   //show Contacts on page load

    showContacts();
    
    $(document).on('submit', '#addContact', function(){
        $('#loaderImage').show();
        $.post("add_contact.php").$(this).serialize().done(function(data){
            console.log(data);
            $('#addModal').foundation('reveal','close');
            showContacts();
                    });
                    return false;
    });
});

function showContacts (){
    
    setTimeout("$('#pageContent').load('contacts.php', function(){$('#loaderImage').hide();})",1000);
}