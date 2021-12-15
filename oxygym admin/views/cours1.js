function modifier_cours(){
    var nom=formmodifiercours.nom;
    var categorie=formmodifiercours.categorie;
    var nombremin=formmodifiercours.nombremin;
    var nombremax=formmodifiercours.nombremax;
    var date=formmodifiercours.date;
    var heure=formmodifiercours.heure;
    var verif=-1;

    
    if(nom.value.length==0){
        alert('Le Nom est obligatoire');
    
        return false;
    
    }else verif=1;

    if(categorie.value.length==0){
        alert('La categorie est obligatoire');
    
        return false;
    
    }else verif=1;
    if(nombremin.value==0){
        alert('L nombre min est obligatoire');
    
        return false;
    
    }else verif=1;
    if(nombremax.value==0){
        alert('Le nombremax est obligatoire');
    
        return false;
    
    }else verif=1;
    if(date.value==''){
        alert('date est obligatoire');
    
        return false;
    
    }else verif=1;
    if(heure.value.length==0){
        alert('L heure est obligatoire');
    
        return false;
    
    }else verif=1;






if(verif==1)
{
    alert('Le cours a ete modifie');

return true;
}

}