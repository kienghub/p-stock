function _logout() {
        Notiflix.Confirm.Show(
                "ສະຖານະ",
                "ທ່ານຕ້ອງການອອກຈາກລະບົບແທ້ ຫຼື ບໍ່?",
                "ຕົກລົງ",
                "ຍົກເລີກ",
                function () {
                        window.location = "../../logout.php";
                },
                function () {
                        close();
                }
        );
}

// SEARCH DATA GLOBAL
$("#search").keyup(function () {
        var filter = $(this).val(),
                count = 0;
        $('#main #sublist').each(function () {
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                        $(this).hide(); // MY CHANGE
                } else {
                        $(this).show(); // MY CHANGE
                        count++;
                }
        });
});

//SEARCH CATEGORY 
$("#searchCategory").keyup(function () {
        var filter = $(this).val(),
                count = 0;
        $('#categorys #category').each(function () {
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                        $(this).hide(); // MY CHANGE
                } else {
                        $(this).show(); // MY CHANGE
                        count++;
                }
        });
});
//SEARCH CATEGORY 
$("#searchMember").keyup(function () {
        var filter = $(this).val(),
                count = 0;
        $('#members #member').each(function () {
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                        $(this).hide(); // MY CHANGE
                } else {
                        $(this).show(); // MY CHANGE
                        count++;
                }
        });
});
