tinymce.init({
    selector: '#editor'
});

var picker = new Pikaday({ 
    field: document.getElementById('datepicker'), 
    format: 'YYYY-MM-DD'

}); 
