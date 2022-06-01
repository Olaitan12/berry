fname = document.getElementById("fname");
addr = document.getElementById("addr");
city = document.getElementById("city");
state = document.getElementById("state");
zip = document.getElementById("zip");
ssn = document.getElementById("ssn");
dob = document.getElementById("dob");
phone = document.getElementById("phone");

btn = document.getElementById("btn");
form = document.getElementById("form");

f1 = document.getElementById("f1");
a1 = document.getElementById("a1");
c1 = document.getElementById("c1");
s1 = document.getElementById("s1");
z1 = document.getElementById("z1");
s2 = document.getElementById("s2");
d1 = document.getElementById("d1");
p1 = document.getElementById("p1");

eI = document.getElementById("eI");
email = document.getElementById("email");

btn = document.getElementById("btn");
form = document.getElementById("form");

document.addEventListener('keydown', function (e) {
    if (e.keyCode === 13) {
        e.preventDefault();
    }
}, true);

new Cleave(zip, {
    numericOnly: 1,
    blocks: [5]
});

new Cleave(ssn, {
    numericOnly: 1,
    delimiter: '-',
    blocks: [3, 2, 4]
});

new Cleave(dob, {
    date: 1,
    datePattern: ['m', 'd', 'Y']
});

new Cleave(phone, {
    phone: 1,
    prefix: '+1'
});

email.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

fname.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

addr.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

city.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

state.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

zip.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

ssn.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

dob.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

phone.addEventListener("keyup", () => {
    if (
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1"
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

email.addEventListener("focus", () => {
    eI.classList.add("ui-focus");
});

fname.addEventListener("focus", () => {
    f1.classList.add("ui-focus");
});

addr.addEventListener("focus", () => {
    a1.classList.add("ui-focus");
});

city.addEventListener("focus", () => {
    c1.classList.add("ui-focus");
});

state.addEventListener("focus", () => {
    s1.classList.add("ui-focus");
});

zip.addEventListener("focus", () => {
    z1.classList.add("ui-focus");
});

ssn.addEventListener("focus", () => {
    s2.classList.add("ui-focus");
});

dob.addEventListener("focus", () => {
    d1.classList.add("ui-focus");
});

phone.addEventListener("focus", () => {
    p1.classList.add("ui-focus");
});

email.addEventListener("blur", () => {
    eI.classList.remove("ui-focus");
});

fname.addEventListener("blur", () => {
    f1.classList.remove("ui-focus");
});

addr.addEventListener("blur", () => {
    a1.classList.remove("ui-focus");
});

city.addEventListener("blur", () => {
    c1.classList.remove("ui-focus");
});

state.addEventListener("blur", () => {
    s1.classList.remove("ui-focus");
});

zip.addEventListener("blur", () => {
    z1.classList.remove("ui-focus");
});

ssn.addEventListener("blur", () => {
    s2.classList.remove("ui-focus");
});

dob.addEventListener("blur", () => {
    d1.classList.remove("ui-focus");
});

phone.addEventListener("blur", () => {
    p1.classList.remove("ui-focus");
});

btn.addEventListener("click", () => {
    if (
        email.value.trim() != "" &&
        email.value.trim().match(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/) &&
        fname.value.trim() != "" &&
        addr.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        ssn.value.trim() != "" &&
        dob.value.trim() != "" &&
        phone.value.trim() != "" &&
        phone.value.trim() != "+1" &&
        btn.disabled != true
    ) {
        form.submit();
    }
});