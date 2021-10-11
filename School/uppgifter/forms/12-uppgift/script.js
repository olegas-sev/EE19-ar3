const cf = document.querySelector("#stora");
const fc = document.querySelector("#små");

cf.addEventListener("change", function () {
    fc.checked = !fc.checked;
})
fc.addEventListener("change", function () {
    cf.checked = !cf.checked;
})