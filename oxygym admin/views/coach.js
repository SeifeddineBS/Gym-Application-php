function ajouter_coach()
{
var cin=formajoutcoach.cin
var nomprenom=formajoutcoach.nomprenom;
// var email=formajoutcoach.email;
var specialite=formajoutcoach.specialite;
var experience=formajoutcoach.experience;
var age=formajoutcoach.age;
var salaire=formajoutcoach.salaire;
var date=formajoutcoach.date;

var verif=-1;
if(cin.value.length==0)
{alert('La CIN est obligatoire');
verif=0;
return false;
}
else verif=1;
if((cin.value.length!=8)&&(cin.value.length!=0))
{alert('La CIN doit comporter 8 chiffres');
verif=0;
return false;
}
else verif=1;

if(nomprenom.value.length==0){
    alert('Le Nom est obligatoire');

    return false;

}
else verif=1;
if(specialite.value.length==0){
    alert('La specialite est obligatoire');

    return false;

}
else verif=1;
if(experience.value.length==0){
    alert('L experience est obligatoire');

    return false;

}
else verif=1;
if(age.value==0){
    alert('L age est obligatoire');

    return false;

}else verif=1;
if(salaire.value==0){
    alert('salaire est obligatoire');

    return false;

}else verif=1;
if(date.value==''){
    alert('date est obligatoire');

    return false;

}else verif=1;


// for(i=0;i<email.value.length;i++)
// {console.log(email.value[i]);
// if((email.value[i]!=".")||(email.value[i]!="@")){
// alert('Verifier votre mail');
// return false;}}
// if(i==email.value.length)
//  verif=1;







if(verif==1)
{
    alert('Merci Pour l ajout');

return true;
}





}