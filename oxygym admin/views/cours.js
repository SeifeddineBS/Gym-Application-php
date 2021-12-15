function ajouter_cours(){
    var id=formajoutcours.id
    var nom=formajoutcours.nom;
    var categorie=formajoutcours.categorie;
    var nombremin=formajoutcours.nombremin;
    var nombremax=formajoutcours.nombremax;
    var date=formajoutcours.date;
    var heure=formajoutcours.heure;
    var idcoach=formajoutcours.idcoach;
    var idsalle=formajoutcours.idsalle;

    var verif=-1;

    if(id.value.length==0)
    {alert('L ID est obligatoire');
    verif=0;
    return false;
    }

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
    if(idcoach.value==0){
        alert('ID coach est obligatoire');
    
        return false;
    
    }else verif=1;
    if(idsalle.value==0){
        alert('ID salle est obligatoire');
    
        return false;
    
    }else verif=1;






if(verif==1)
{
    alert('Merci Pour l ajouttt');

return true;
}

}