// const string = " chaine de caractere"
// const number = 23
// const boolean = true or false
// const tableau = [23,"poulet,vert"]
// let objet = {
//     let color = vert;
//     const bleeu = couleur;
// let a = 2;
// let b = 3;
// let num = a + b;
// }
const name = "Logan";
console.log(name);
// let total = 3;
// total++;
// total--;
// console.log(total);
// // function test() {
//   let repas = "frite";
//   let accompagnement = "poulet";
//   console.log(test);
// }
// console.log(test);
// let a = 2;
// let b = 1;
// if (b > a) {
//   console.log("en effet b est supérieur a a");
// } else if ((b = a)) {
//   console.log("les résultats sont égaux");
// } else {
//   console.log("a est malheureusement supérieur a b");
// }
// total *= += -= /= raccourcie pour additioner ect
// -------------------------------------------------------------------------------------------------------------------- STYLE CLICK! EVENT
// const enTete = document.querySelector(".top");
// const addPanier = document.querySelector(".panier");
// const validation = document.querySelector(".p");
// enTete.addEventListener("click", () => {
//   enTete.style.background = "green";
// });

// enTete.addEventListener("click", () => {
//   enTete.classList.add("enTetee");
// });

// addPanier.addEventListener("click", () => {
//   validation.classList.add("validation");
// });
// addPanier.addEventListener("click", () => {
//   alert("Bravo ! votre vetement est dans votre panier");
// });
// {/* <div> > #id > class > balisehtml  */} ordre de priorité (importance)
//-------------------------------------------------------------------------------- Mouse event
// const mousemove = document.querySelector(".mousemove");

// window.addEventListener("mousemove", (e) => {
//   mousemove.style.left = e.pageX + "px";
//   mousemove.style.top = e.pageY + "px";
// });

// mousemove.addEventListener("mousedown", () => {
// mousedown et mouseup fais qlq quand on appuie et quon enleve
// });
// mousemove.addEventListener("mouseenter et mouseout" ,()=>{
//   lorsqu'on rentre et sort de qlq chose
// })
// mousemove.addEventListener("mouseover",()=>{
//   comme over en css mais peu etre plus optimal
// })
// ------------------------------------------------------ keypress

// const keypress = document.querySelector(".keypress");
// const key = document.getElementById("key");
// console.log(key);

// document.addEventListener("keypress", (e) => {
//   key.textContent = e.key;
//   if (e.key === "L") {
//     console.log("L majuscule");
//   } else {
//     console.log("pas bon");
//   }
// });
// -------------------------------------------------------------- scroll event

// const nav = document.querySelector("nav");

// window.addEventListener("scroll", () => {
//   console.log(window.scrollY);
//   if (window.scrollY > 287) {
//     nav.style.top = 0;
//   }
// });
// ---------------------------------------------------------------- form event ( formulaire)
const input = document.querySelector('input[type="text"]');
const select = document.querySelector("select");
const form = document.querySelector("form");
let pseudo = "";
let programmation = "";
input.addEventListener("input", (e) => {
  pseudo = e.target.value;
});
select.addEventListener("input", (e) => {
  programmation = e.target.value;
  console.log(programmation);
});
form.addEventListener("submit", (e) => {
  e.preventdefault();
  if (CGV.checked) {
    console.log("send");
  } else {
    alert("Cochez les CGV");
  }
});
