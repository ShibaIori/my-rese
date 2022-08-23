const shops = document.getElementsByClassName("shop_card");

const area = document.getElementById("area");
const genre = document.getElementById("genre");
const text = document.getElementById("text");

area.addEventListener("change", () => {
  search();
})

genre.addEventListener("change", () => {
  search();
})

text.addEventListener("change", () => {
  search();
})

function search()
{
  for (let i = 0; i < shops.length; i++) {
    shops[i].style.display = "block";

    const shop_name = shops[i].querySelector(".shop_name").innerHTML;
    const shop_area = shops[i].querySelector(".area").innerHTML;
    const shop_genre = shops[i].querySelector(".genre").innerHTML;

    const hit_name = shop_name.indexOf(text.value);
    const hit_area = shop_area.indexOf(area.value);
    const hit_genre = shop_genre.indexOf(genre.value);

    if (area.value != 0 && hit_area == -1) {
      shops[i].style.display = "none";
    }
    else if (genre.value != 0 && hit_genre == -1) {
      shops[i].style.display = "none";
    }
    else if (hit_name == -1) {
      shops[i].style.display = "none";
    }
  }
}