let form = document.querySelector("#myForm");
form.addEventListener("submit", async(e)=>{
    e.preventDefault()
    let headers = new Headers({"Content-Type": "application/json"})
    let data = Object.fromEntries(new FormData(e.target))
    let config = {
        method: "POST",
        headers: headers,
        body: JSON.stringify(data)
    };
    let request = await fetch("api.php", config);
    let response = await request.text();
    document.querySelector("pre").innerHTML = response;
})