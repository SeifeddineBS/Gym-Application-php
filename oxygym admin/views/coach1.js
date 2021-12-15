function modifier_coach()
{
var nomprenom=formmodifiercoach.nomprenom;
// var email=formmodifiercoach.email;
var specialite=formmodifiercoach.specialite;
var experience=formmodifiercoach.experience;
var age=formmodifiercoach.age;
var salaire=formmodifiercoach.salaire;
var date=formmodifiercoach.date;

var verif=-1;



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
    alert('Le coach a ete modifie');

return true;
}





}