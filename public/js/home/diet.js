const nutritional__list = document.querySelector(".nutritional__list");
const random_recipes_button = document.querySelector("#random-recipes");

async function getRecipes() {
    const response = await fetch("/data/recipes.json");
    const data = await response.json();

    return data;
}

const recipes = await getRecipes();

const getRecipeById = (id) => {
    return recipes[id];
};

const getRandomNumber = (max) => {
    return Math.floor(Math.random() * max);
};
const getRandomRecipes = () => {
    const max = recipes.length;

    return [
        recipes[getRandomNumber(max)],
        recipes[getRandomNumber(max)],
        recipes[getRandomNumber(max)],
    ];
};

function createRecipeCard(recipe) {
    const recipe_card = document.createElement("li");
    recipe_card.classList.add("nutritional__recipe", "animate__animated", "animate__fadeIn");
    recipe_card.style.setProperty("--bg-image", `url(${recipe.image})`);
    recipe_card.setAttribute("data-id", recipe.id);

    const recipe_text = document.createElement("div");
    recipe_text.classList.add("nutritional__recipe-text");
    recipe_text.innerHTML = `
        <h5>${recipe.title}</h5>
        <p></p>
        <span>${recipe.description}</span>`;

    recipe_card.appendChild(recipe_text);
    return recipe_card;
}

function generateRandomRecipes() {
    const randomRecipes = getRandomRecipes();
    randomRecipes.forEach((recipe) => {
        const recipe_card = createRecipeCard(recipe);
        nutritional__list.appendChild(recipe_card);
    });

    handleChangeRecipe();
}

generateRandomRecipes();

random_recipes_button.addEventListener("click", () => {
    nutritional__list.innerHTML = "";
    generateRandomRecipes();
});

function handleChangeRecipe() {
    const recipe_container = document.querySelector(".recipe__container");

    const recipe_cards = document.querySelectorAll(".nutritional__recipe");
    recipe_cards.forEach((recipe_card) => {
        recipe_card.addEventListener("click", () => {
            const id = recipe_card.getAttribute("data-id");
            const { image, title, description, ingredients, instructions } =
                getRecipeById(id - 1);

            const recipe = `
                <div class="recipe animate__animated animate__fadeIn">
                    <div class="recipe__image">
                        <img src="${image}" alt="${title}">
                    </div>
                    <div class="recipe__content">
                        <div class="recipe__text">
                            <h3>${title}</h3>
                            <p>${description}</p>
                        </div>
                        <div class="recipe__ingredients">
                            <h4>Ingredientes</h4>
                            <ul class="recipe__list">
                                ${ingredients
                    .map(
                        (ingredient) =>
                            `<li><span>✓</span>${ingredient}</li>`
                    )
                    .join("")}
                            </ul>
                        </div>
                        <div class="recipe__instructions">
                            <h4>Preparación</h4>
                            <ul class="recipe__list">
                             ${instructions
                    .map(
                        (instruction, index) =>
                            `<li><span>${index + 1
                            }.</span> ${instruction}</li>`
                    )
                    .join("")}
                            </ul>
                        </div>
                    </div>
                </div>
            `;

            recipe_container.innerHTML = recipe;
        });
    });
}
