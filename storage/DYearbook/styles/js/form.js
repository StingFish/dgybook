//submit1
let addButton = document.querySelector('.add-btn-reg-ao');
let addMember = document.querySelector('.addMember');
let cancelButton = document.querySelector('.cancel-btn');

addButton.addEventListener('click', function(){
    addMember.classList.add('form-active');
});
cancelButton.addEventListener('click', function(){
    addMember.classList.remove('form-active');
});
//submit2
let addButtonRegA = document.querySelector('.add-btn-reg-a');
let addMemberRegA = document.querySelector('.addMember-reg-a');
let cancelButtonRegA = document.querySelector('.cancel-btn-reg-a');

addButtonRegA.addEventListener('click', function(){
    addMemberRegA.classList.add('form-active');
});
cancelButtonRegA.addEventListener('click', function(){
    addMemberRegA.classList.remove('form-active');
});
//submit3
let addButtonGrad = document.querySelector('.add-btn-reg-grad');
let addMemberGrad = document.querySelector('.addMember-reg-grad');
let cancelButtonGrad = document.querySelector('.cancel-btn-reg-grad');

addButtonGrad.addEventListener('click', function(){
    addMemberGrad.classList.add('form-active');
});
cancelButtonGrad.addEventListener('click', function(){
    addMemberGrad.classList.remove('form-active');
});
//submit4
let addButtonMilestone = document.querySelector('.add-btn-m');
let addMemberMilestone = document.querySelector('.addMember-m');
let cancelButtonMilestone = document.querySelector('.cancel-btn-m');

addButtonMilestone.addEventListener('click', function(){
    addMemberMilestone.classList.add('form-active');
});
cancelButtonMilestone.addEventListener('click', function(){
    addMemberMilestone.classList.remove('form-active');
});
