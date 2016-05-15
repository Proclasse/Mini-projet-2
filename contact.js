// Fonction de désactivation de l'affichage des "tooltips"
    
        function deactivateTooltips() {
        
        var tooltips = document.querySelectorAll('.tooltip'),
        tooltipsLength = tooltips.length;
        
        for (var i = 0 ; i < tooltipsLength ; i++) {
        tooltips[i].style.display = 'none';
        }
        
        }
        
        
        // La fonction ci-dessous permet de récupérer la "tooltip" qui correspond à  input
        
        function getTooltip(elements) {
        
        while (elements = elements.nextSibling) {
        if (elements.className === 'tooltip') {
        return elements;
        }
        }
        
        return false;
        
        }
        
        
        // Fonctions de vérification du formulaire, elles renvoient "true" si tout est ok
        
        var check = {}; // On met toutes nos fonctions dans un objet littéral
        
              
        check['lastName'] = function(id) {
        
        var name = document.getElementById(id),
        tooltipStyle = getTooltip(name).style;
        
        if (name.value.length >= 2) {
        name.className = 'correct';
        tooltipStyle.display = 'none';
        return true;
        } else {
        name.className = 'incorrect';
        tooltipStyle.display = 'inline-block';
        return false;
        }
        
        };
        
        check['firstName'] = check['lastName']; // La fonction pour le prénom est la même que celle du nom
        
        check['mailtest'] = function() {


{
        var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

        if(reg.test(mailteste))
        {
                return(true);
        }
        else
        {
                return(false);
        }
}
        
        };
        
        
    
           
        for (var i in check) {
        result = check[i](i) && result;
        }
        
        if (result) {
        alert('Le formulaire est bien rempli.');
        }
        
        e.preventDefault();
        
        }, false);
        
        myForm.addEventListener('reset', function() {
        
        for (var i = 0 ; i < inputsLength ; i++) {
        inputs[i].className = '';
        }
        
        deactivateTooltips();
        
        }, false);
        
        })();
        
        
        // désactiver les "tooltips"
        
        deactivateTooltips();
