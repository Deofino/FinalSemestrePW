async function requests() {
    let URL = document.URL.split("admin")[0];
    let reqCate = await fetch(`${URL}product/select`, {
      body: JSON.stringify({
        mult: true,
        query:
          "select count(idCategory) as ct, nameCategory from tbshoe inner join tbcategory on tbshoe.idCategory = tbcategory._id GROUP by idCategory",
      }),
      cache: "default",
      method: "POST",
      mode: "cors",
      headers: { "Content-Type": "applicationn/json" },
    });
    let reqBrand = await fetch(`${URL}product/select`, {
      body: JSON.stringify({
        mult: true,
        query:
          "select count(idBrand) as ct, nameBrand from tbshoe inner join tbbrand on tbshoe.idBrand = tbbrand._id GROUP by idBrand",
      }),
      cache: "default",
      method: "POST",
      mode: "cors",
      headers: { "Content-Type": "applicationn/json" },
    });
    let reqGender = await fetch(`${URL}product/select`, {
      body: JSON.stringify({
        mult: true,
        query:
          "select count(genderShoe) as ct, genderShoe from tbshoe GROUP by genderShoe",
      }),
      cache: "default",
      method: "POST",
      mode: "cors",
      headers: { "Content-Type": "applicationn/json" },
    });

    let resCate = await reqCate.json();
    let resBrand = await reqBrand.json();
    let resGender = await reqGender.json();
    return [resBrand, resCate, resGender]
    // console.log(resCate);
    // console.log(resBrand);
    // console.log(resGender);
  }
  //   $filterCate = $product->personSelects('select count(idBrand), nameBrand from tbshoe inner join tbbrand on tbshoe.idBrand = tbbrand._id GROUP by idBrand');
  //     $filterBrand = $product->personSelects("select count(idCategory), nameCategory from tbshoe inner join tbcategory on tbshoe.idCategory = tbcategory._id GROUP by idCategory");
  //     $filterGender = $product->personSelects("select count(genderShoe), genderShoe from tbshoe GROUP by genderShoe");