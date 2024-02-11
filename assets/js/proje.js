$(document).ready(function() {
    $("#select2seachHasta").select2({
        ajax: {
            url: "getUrun.php", // PHP dosyanızın yolu
            dataType: 'json',
            delay: 250,
            data: function (params) {
                console.log(params);
                return {
                   
                    q: params.term, // Kullanıcının girdiği terim
                    page: params.page
                };
            },
            processResults: function (data) {
                console.log(data);
                
            
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder: 'Minimum 2 harf giriniz',
        minimumInputLength: 2,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });
    function formatRepo (repo) {
        if (repo.loading) {
            return repo.text;
        }

        var $container = $(
            `<option value='${repo.id}'>${repo.ad + " " + repo.soyad}<option>`

        );

        return $container;
    }

    function formatRepoSelection (repo) {

    return (repo.ad || "Hasta Adı") + " " + (repo.soyad || "Giriniz..") || repo.text;
    }
    

})

