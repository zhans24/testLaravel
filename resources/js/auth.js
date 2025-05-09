document.getElementById('registerForm').addEventListener('submit',function (e){
    e.preventDefault();
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // token = OMjacRun8ksKcWTdBy3gcDQBT2MtazQpwHr1scXE
    const formData=(new FormData(this));


    fetch('/auth/register', {
        body: formData,
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': token
        }
    }).then (r => r.json())
        .then(data=>{
            alert(data.message)
            if (data.success) {
                document.getElementById('signUpSection').style.display = 'none';
                document.getElementById('signInSection').style.display = 'block';
            }
        })
        .catch(err=>console.log(err))
})

document.getElementById('loginForm').addEventListener('submit',function (e){
    e.preventDefault();
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const formData=(new FormData(this));

    fetch('/auth/login', {
        body: formData,
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': token
        }
    }).then (r => r.json())
        .then(data=>{
            if (data.redirect){
                window.location.href=data.redirect;
            }})
        .catch(err=>console.log(err))
})

document.getElementById('toSignInBtn').addEventListener('click', () => {
    document.getElementById('signUpSection').style.display = 'none';
    document.getElementById('signInSection').style.display = 'block';
});

document.getElementById('toSignUpBtn').addEventListener('click', () => {
    document.getElementById('signInSection').style.display = 'none';
    document.getElementById('signUpSection').style.display = 'block';
});

