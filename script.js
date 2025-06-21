// WendysMenu - Main JavaScript

// Menu data
const menuCategories = [
    { id: 'all', name: 'All Items' },
    { id: 'burgers', name: 'Burgers' },
    { id: 'chicken', name: 'Chicken' },
    { id: 'breakfast', name: 'Breakfast' },
    { id: 'salads', name: 'Salads' },
    { id: 'fries', name: 'Fries & Sides' },
    { id: 'beverages', name: 'Beverages' },
    { id: 'combos', name: 'Combos' },
    { id: 'frosty', name: 'Frosty & Desserts' },
    { id: 'kids', name: 'Kids Meals' },
    { id: 'deals', name: 'Deals & Offers' }
];

const menuItems = [
    // Burgers
    {
        id: '1',
        name: "Dave's Single®",
        description: "A quarter-pound of fresh beef, American cheese, crisp lettuce, tomato, pickle, ketchup, mayo, and onion on a toasted bun.",
        price: "$6.99",
        image: "https://images.pexels.com/photos/1639557/pexels-photo-1639557.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'burgers',
        popular: true,
        calories: "570 Cal",
        ingredients: ['fresh beef', 'american cheese', 'lettuce', 'tomato', 'pickle', 'ketchup', 'mayo', 'onion'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/daves-single/"
    },
    {
        id: '2',
        name: "Dave's Double®",
        description: "Two quarter-pound patties of fresh beef, American cheese, crisp lettuce, tomato, pickle, ketchup, mayo, and onion.",
        price: "$8.99",
        image: "https://images.pexels.com/photos/2983101/pexels-photo-2983101.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'burgers',
        popular: false,
        calories: "820 Cal",
        ingredients: ['fresh beef', 'american cheese', 'lettuce', 'tomato', 'pickle', 'ketchup', 'mayo', 'onion'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/daves-double/"
    },
    {
        id: '3',
        name: "Dave's Triple®",
        description: "Three quarter-pound patties of fresh beef, American cheese, crisp lettuce, tomato, pickle, ketchup, mayo, and onion.",
        price: "$10.99",
        image: "https://images.pexels.com/photos/1199957/pexels-photo-1199957.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'burgers',
        popular: false,
        calories: "1070 Cal",
        ingredients: ['fresh beef', 'american cheese', 'lettuce', 'tomato', 'pickle', 'ketchup', 'mayo', 'onion'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/daves-triple/"
    },
    {
        id: '4',
        name: "Baconator®",
        description: "A half-pound of fresh beef, six strips of Applewood smoked bacon, American cheese, ketchup, and mayo.",
        price: "$10.99",
        image: "https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'burgers',
        popular: true,
        calories: "950 Cal",
        ingredients: ['fresh beef', 'applewood bacon', 'american cheese', 'ketchup', 'mayo'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/baconator/"
    },
    {
        id: '5',
        name: "Son of Baconator®",
        description: "A quarter-pound of fresh beef, four strips of Applewood smoked bacon, American cheese, ketchup, and mayo.",
        price: "$7.99",
        image: "https://images.pexels.com/photos/2983098/pexels-photo-2983098.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'burgers',
        popular: false,
        calories: "630 Cal",
        ingredients: ['fresh beef', 'applewood bacon', 'american cheese', 'ketchup', 'mayo'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/son-of-baconator/"
    },
    {
        id: '6',
        name: "Big Bacon Classic®",
        description: "A quarter-pound of fresh beef, Applewood smoked bacon, American cheese, crisp lettuce, tomato, pickle, ketchup, mayo, and onion.",
        price: "$7.49",
        image: "https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'burgers',
        popular: false,
        calories: "650 Cal",
        ingredients: ['fresh beef', 'applewood bacon', 'american cheese', 'lettuce', 'tomato', 'pickle', 'ketchup', 'mayo', 'onion'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/big-bacon-classic/"
    },
    {
        id: '7',
        name: "Jr. Bacon Cheeseburger",
        description: "Fresh beef, Applewood smoked bacon, American cheese, crisp lettuce, tomato, and mayo.",
        price: "$3.99",
        image: "https://images.pexels.com/photos/1556698/pexels-photo-1556698.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'burgers',
        popular: false,
        calories: "380 Cal",
        ingredients: ['fresh beef', 'applewood bacon', 'american cheese', 'lettuce', 'tomato', 'mayo'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/jr-bacon-cheeseburger/"
    },
    
    // Chicken
    {
        id: '8',
        name: "Classic Chicken Sandwich",
        description: "A juicy, lightly breaded crispy chicken breast with crisp lettuce, tomato, and mayo.",
        price: "$6.49",
        image: "https://images.pexels.com/photos/5474836/pexels-photo-5474836.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'chicken',
        popular: false,
        calories: "490 Cal",
        ingredients: ['chicken breast', 'lettuce', 'tomato', 'mayo'],
        allergens: ['gluten', 'eggs'],
        detailUrl: "/classic-chicken-sandwich/"
    },
    {
        id: '9',
        name: "Spicy Chicken Sandwich",
        description: "A juicy chicken breast marinated and breaded in our unique, fiery blend of peppers and spices.",
        price: "$6.49",
        image: "https://images.pexels.com/photos/5474835/pexels-photo-5474835.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'chicken',
        popular: true,
        calories: "510 Cal",
        ingredients: ['spicy chicken', 'lettuce', 'tomato', 'mayo'],
        allergens: ['gluten', 'eggs'],
        detailUrl: "/spicy-chicken-sandwich/"
    },
    {
        id: '10',
        name: "Grilled Chicken Sandwich",
        description: "Herb-marinated grilled chicken breast, topped with smoky honey mustard, crisp spring mix, and tomato.",
        price: "$6.49",
        image: "https://images.pexels.com/photos/5474837/pexels-photo-5474837.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'chicken',
        popular: false,
        calories: "370 Cal",
        ingredients: ['grilled chicken', 'spring mix', 'tomato', 'honey mustard'],
        allergens: ['gluten'],
        detailUrl: "/grilled-chicken-sandwich/"
    },
    {
        id: '11',
        name: "Chicken Nuggets (10 pc)",
        description: "100% white-meat chicken breaded and seasoned to perfection.",
        price: "$5.99",
        image: "https://images.pexels.com/photos/60616/fried-chicken-chicken-fried-crunchy-60616.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'chicken',
        popular: true,
        calories: "420 Cal",
        ingredients: ['white-meat chicken', 'breading'],
        allergens: ['gluten'],
        detailUrl: "/chicken-nuggets/"
    },
    {
        id: '12',
        name: "Spicy Chicken Nuggets (10 pc)",
        description: "100% white-meat chicken breaded with our unique spicy blend of peppers and spices.",
        price: "$5.99",
        image: "https://images.pexels.com/photos/7837845/pexels-photo-7837845.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'chicken',
        popular: false,
        calories: "430 Cal",
        ingredients: ['white-meat chicken', 'spicy breading'],
        allergens: ['gluten'],
        detailUrl: "/spicy-chicken-nuggets/"
    },
    
    // Breakfast
    {
        id: '13',
        name: "Breakfast Baconator®",
        description: "Grilled sausage, American cheese, Applewood smoked bacon, a fresh-cracked egg, more cheese and more bacon all covered in swiss cheese sauce.",
        price: "$5.99",
        image: "https://images.pexels.com/photos/139746/pexels-photo-139746.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'breakfast',
        popular: true,
        calories: "730 Cal",
        ingredients: ['grilled sausage', 'american cheese', 'applewood bacon', 'egg', 'swiss cheese sauce'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/breakfast-baconator/"
    },
    {
        id: '14',
        name: "Honey Butter Chicken Biscuit",
        description: "A crispy, chicken fillet, perfectly seasoned and topped with maple honey butter on a fluffy buttermilk biscuit.",
        price: "$4.99",
        image: "https://images.pexels.com/photos/2955819/pexels-photo-2955819.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'breakfast',
        popular: false,
        calories: "500 Cal",
        ingredients: ['chicken fillet', 'maple honey butter', 'buttermilk biscuit'],
        allergens: ['gluten', 'dairy'],
        detailUrl: "/honey-butter-chicken-biscuit/"
    },
    {
        id: '15',
        name: "Bacon, Egg & Cheese Biscuit",
        description: "A fresh-cracked egg, Applewood smoked bacon, and American cheese on a fluffy buttermilk biscuit.",
        price: "$4.49",
        image: "https://images.pexels.com/photos/139746/pexels-photo-139746.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'breakfast',
        popular: false,
        calories: "420 Cal",
        ingredients: ['egg', 'applewood bacon', 'american cheese', 'buttermilk biscuit'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/bacon-egg-cheese-biscuit/"
    },
    
    // Salads
    {
        id: '16',
        name: "Parmesan Caesar Salad",
        description: "Crisp romaine lettuce, topped with grilled chicken breast, Parmesan crisps, and Caesar dressing.",
        price: "$8.99",
        image: "https://images.pexels.com/photos/1211887/pexels-photo-1211887.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'salads',
        popular: false,
        calories: "440 Cal",
        ingredients: ['romaine lettuce', 'grilled chicken', 'parmesan crisps', 'caesar dressing'],
        allergens: ['dairy'],
        detailUrl: "/parmesan-caesar-salad/"
    },
    {
        id: '17',
        name: "Southwest Avocado Salad",
        description: "Lettuce topped with pepper jack cheese, diced tomatoes, avocado, Applewood smoked bacon, and grilled chicken breast.",
        price: "$9.99",
        image: "https://images.pexels.com/photos/1059905/pexels-photo-1059905.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'salads',
        popular: true,
        calories: "570 Cal",
        ingredients: ['lettuce', 'pepper jack cheese', 'tomatoes', 'avocado', 'applewood bacon', 'grilled chicken'],
        allergens: ['dairy'],
        detailUrl: "/southwest-avocado-salad/"
    },
    
    // Fries & Sides
    {
        id: '18',
        name: "Natural Cut Fries (Medium)",
        description: "Natural-cut, skin-on potatoes cooked in vegetable oil, lightly sprinkled with sea salt.",
        price: "$2.99",
        image: "https://images.pexels.com/photos/1893555/pexels-photo-1893555.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'fries',
        popular: true,
        calories: "420 Cal",
        ingredients: ['potatoes', 'vegetable oil', 'sea salt'],
        allergens: [],
        detailUrl: "/natural-cut-fries/"
    },
    {
        id: '19',
        name: "Baconator Fries",
        description: "Natural-cut, skin-on potatoes, topped with warm, creamy cheese sauce, shredded cheddar, and crispy Applewood smoked bacon.",
        price: "$4.49",
        image: "https://images.pexels.com/photos/115740/pexels-photo-115740.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'fries',
        popular: false,
        calories: "490 Cal",
        ingredients: ['potatoes', 'cheese sauce', 'cheddar cheese', 'applewood bacon'],
        allergens: ['dairy'],
        detailUrl: "/baconator-fries/"
    },
    {
        id: '20',
        name: "Chili (Small)",
        description: "Perfectly seasoned and positively irresistible. Red's kind of our thing, you know?",
        price: "$3.49",
        image: "https://images.pexels.com/photos/5966431/pexels-photo-5966431.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'fries',
        popular: false,
        calories: "240 Cal",
        ingredients: ['beef', 'beans', 'tomato', 'spices'],
        allergens: [],
        detailUrl: "/chili/"
    },
    
    // Beverages
    {
        id: '21',
        name: "Soft Drink (Medium)",
        description: "Choose from Coca-Cola®, Diet Coke®, Sprite®, Dr Pepper®, or Minute Maid® Light Lemonade.",
        price: "$2.49",
        image: "https://images.pexels.com/photos/2983100/pexels-photo-2983100.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'beverages',
        popular: false,
        calories: "0-250 Cal",
        ingredients: ['varies by selection'],
        allergens: [],
        detailUrl: "/soft-drink/"
    },
    {
        id: '22',
        name: "Strawberry Lemonade (Medium)",
        description: "Minute Maid® Light Lemonade with real strawberry puree.",
        price: "$2.99",
        image: "https://images.pexels.com/photos/96974/pexels-photo-96974.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'beverages',
        popular: false,
        calories: "180 Cal",
        ingredients: ['lemonade', 'strawberry puree'],
        allergens: [],
        detailUrl: "/strawberry-lemonade/"
    },
    
    // Frosty & Desserts
    {
        id: '23',
        name: "Chocolate Frosty® (Medium)",
        description: "The Frosty® that started it all. Thick enough to use a spoon, smooth enough to use a straw.",
        price: "$3.49",
        image: "https://images.pexels.com/photos/3727250/pexels-photo-3727250.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'frosty',
        popular: true,
        calories: "470 Cal",
        ingredients: ['milk', 'cream', 'sugar', 'cocoa'],
        allergens: ['dairy'],
        detailUrl: "/chocolate-frosty/"
    },
    {
        id: '24',
        name: "Vanilla Frosty® (Medium)",
        description: "The smooth, creamy Vanilla Frosty® you crave, made with real milk and cream.",
        price: "$3.49",
        image: "https://images.pexels.com/photos/1352296/pexels-photo-1352296.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'frosty',
        popular: false,
        calories: "440 Cal",
        ingredients: ['milk', 'cream', 'sugar', 'vanilla'],
        allergens: ['dairy'],
        detailUrl: "/vanilla-frosty/"
    },
    
    // Kids Meals
    {
        id: '25',
        name: "Kids' Meal Hamburger",
        description: "A fresh beef patty, pickles, onion, and ketchup on a toasted bun. Comes with fries and a drink.",
        price: "$5.49",
        image: "https://images.pexels.com/photos/2271107/pexels-photo-2271107.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'kids',
        popular: false,
        calories: "550 Cal",
        ingredients: ['fresh beef', 'pickles', 'onion', 'ketchup', 'bun', 'fries', 'drink'],
        allergens: ['gluten'],
        detailUrl: "/kids-meal-hamburger/"
    },
    {
        id: '26',
        name: "Kids' Meal Chicken Nuggets (4 pc)",
        description: "Four crispy, white-meat chicken nuggets. Comes with fries and a drink.",
        price: "$5.49",
        image: "https://images.pexels.com/photos/60616/fried-chicken-chicken-fried-crunchy-60616.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'kids',
        popular: false,
        calories: "520 Cal",
        ingredients: ['white-meat chicken', 'breading', 'fries', 'drink'],
        allergens: ['gluten'],
        detailUrl: "/kids-meal-chicken-nuggets/"
    },
    
    // Combos
    {
        id: '27',
        name: "Dave's Single® Combo",
        description: "Dave's Single with a side of Natural Cut Fries and a drink of your choice.",
        price: "$9.99",
        image: "https://images.pexels.com/photos/1639557/pexels-photo-1639557.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'combos',
        popular: true,
        calories: "990 Cal",
        ingredients: ['dave\'s single', 'natural cut fries', 'drink'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/daves-single-combo/"
    },
    {
        id: '28',
        name: "Baconator® Combo",
        description: "Baconator with a side of Natural Cut Fries and a drink of your choice.",
        price: "$13.99",
        image: "https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'combos',
        popular: true,
        calories: "1370 Cal",
        ingredients: ['baconator', 'natural cut fries', 'drink'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/baconator-combo/"
    },
    {
        id: '29',
        name: "Spicy Chicken Sandwich Combo",
        description: "Spicy Chicken Sandwich with a side of Natural Cut Fries and a drink of your choice.",
        price: "$9.99",
        image: "https://images.pexels.com/photos/5474835/pexels-photo-5474835.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'combos',
        popular: false,
        calories: "930 Cal",
        ingredients: ['spicy chicken sandwich', 'natural cut fries', 'drink'],
        allergens: ['gluten', 'eggs'],
        detailUrl: "/spicy-chicken-combo/"
    },
    
    // Deals & Offers
    {
        id: '30',
        name: "4 for $4 Meal",
        description: "Choose from Jr. Cheeseburger, Jr. Bacon Cheeseburger, Crispy Chicken Sandwich, or 4-piece Nuggets plus fries, 4-piece nuggets, and a drink.",
        price: "$4.00",
        image: "https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'deals',
        popular: true,
        calories: "700-950 Cal",
        ingredients: ['varies by selection', 'fries', 'nuggets', 'drink'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/4-for-4-meal/"
    },
    {
        id: '31',
        name: "$5 Biggie Bag",
        description: "Choose from Jr. Bacon Cheeseburger, Double Stack™, or Crispy Chicken BLT plus 4-piece nuggets, fries, and a drink.",
        price: "$5.00",
        image: "https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1",
        category: 'deals',
        popular: true,
        calories: "800-1100 Cal",
        ingredients: ['varies by selection', 'nuggets', 'fries', 'drink'],
        allergens: ['gluten', 'dairy', 'eggs'],
        detailUrl: "/5-biggie-bag/"
    }
];

// Time-based menu categories
const timeCategories = [
    {
        id: 'breakfast',
        name: 'Breakfast',
        description: 'Start your day right',
        image: 'https://images.pexels.com/photos/139746/pexels-photo-139746.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1',
        hours: '6:30 AM - 10:30 AM'
    },
    {
        id: 'lunch',
        name: 'Lunch',
        description: 'Midday favorites',
        image: 'https://images.pexels.com/photos/1639557/pexels-photo-1639557.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1',
        hours: '10:30 AM - 4:00 PM'
    },
    {
        id: 'dinner',
        name: 'Dinner',
        description: 'Evening classics',
        image: 'https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1',
        hours: '4:00 PM - 10:00 PM'
    },
    {
        id: 'latenight',
        name: 'Late Night',
        description: 'After hours cravings',
        image: 'https://images.pexels.com/photos/2983101/pexels-photo-2983101.jpeg?auto=compress&cs=tinysrgb&w=400&h=300&dpr=1',
        hours: '10:00 PM - 2:00 AM'
    }
];

// Blog posts data
const blogPosts = [
    {
        id: 1,
        title: "The History of the Baconator: How a Legendary Burger Was Born",
        excerpt: "Discover the fascinating story behind Wendy's iconic Baconator and how it became a fan favorite since its introduction in 2007.",
        image: "https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "June 15, 2024",
        author: "Mike Johnson",
        category: "Food History",
        url: "/blog-1/"
    },
    {
        id: 2,
        title: "Fresh vs. Frozen: Why Fresh Beef Makes a Better Burger",
        excerpt: "Learn why Wendy's commitment to fresh, never frozen beef creates a juicier, more flavorful burger experience every time.",
        image: "https://images.pexels.com/photos/1639557/pexels-photo-1639557.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "May 28, 2024",
        author: "Sarah Williams",
        category: "Food Quality",
        url: "/blog-2/"
    },
    {
        id: 3,
        title: "The Ultimate Guide to Wendy's Secret Menu Items",
        excerpt: "Explore hidden menu hacks and secret combinations that Wendy's fans have discovered over the years.",
        image: "https://images.pexels.com/photos/1199957/pexels-photo-1199957.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "April 10, 2024",
        author: "Chris Taylor",
        category: "Menu Hacks",
        url: "/blog-3/"
    },
    {
        id: 4,
        title: "The Evolution of Wendy's Breakfast Menu",
        excerpt: "From its early days to the current lineup, see how Wendy's breakfast offerings have evolved to become morning favorites.",
        image: "https://images.pexels.com/photos/139746/pexels-photo-139746.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "March 22, 2024",
        author: "Jessica Martinez",
        category: "Menu History",
        url: "/blog-4/"
    },
    {
        id: 5,
        title: "Frosty Favorites: The Story Behind Wendy's Iconic Dessert",
        excerpt: "Discover how the beloved Frosty became a signature item and why it's neither a milkshake nor ice cream.",
        image: "https://images.pexels.com/photos/3727250/pexels-photo-3727250.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "February 15, 2024",
        author: "David Wilson",
        category: "Desserts",
        url: "/blog-5/"
    },
    {
        id: 6,
        title: "Wendy's Around the World: International Menu Items",
        excerpt: "Take a global tour of unique Wendy's menu items that are only available in specific countries.",
        image: "https://images.pexels.com/photos/2087748/pexels-photo-2087748.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "January 30, 2024",
        author: "Emily Chang",
        category: "International",
        url: "/blog-6/"
    },
    {
        id: 7,
        title: "The Art of the Perfect Chicken Sandwich",
        excerpt: "Learn what makes Wendy's chicken sandwiches stand out from the competition in the fast food chicken wars.",
        image: "https://images.pexels.com/photos/5474835/pexels-photo-5474835.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "January 12, 2024",
        author: "Robert Johnson",
        category: "Food Craft",
        url: "/blog-7/"
    },
    {
        id: 8,
        title: "Wendy's Sustainable Practices: A Look at Eco-Friendly Initiatives",
        excerpt: "Explore how Wendy's is working to reduce its environmental footprint through various sustainability programs.",
        image: "https://images.pexels.com/photos/2454533/pexels-photo-2454533.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "December 5, 2023",
        author: "Lisa Green",
        category: "Sustainability",
        url: "/blog-8/"
    },
    {
        id: 9,
        title: "The Science of Taste: What Makes Wendy's Flavors Stand Out",
        excerpt: "Dive into the culinary science behind Wendy's distinctive flavor profiles and why they're so craveable.",
        image: "https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "November 18, 2023",
        author: "Dr. Michael Chen",
        category: "Food Science",
        url: "/blog-9/"
    },
    {
        id: 10,
        title: "From Farm to Restaurant: Tracing Wendy's Supply Chain",
        excerpt: "Follow the journey of Wendy's ingredients from farms and suppliers to your local restaurant.",
        image: "https://images.pexels.com/photos/2255935/pexels-photo-2255935.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "October 22, 2023",
        author: "Thomas Rodriguez",
        category: "Food Sourcing",
        url: "/blog-10/"
    },
    {
        id: 11,
        title: "The Nutritionist's Guide to Eating at Wendy's",
        excerpt: "A professional nutritionist shares tips for making healthier choices while enjoying Wendy's menu items.",
        image: "https://images.pexels.com/photos/1640773/pexels-photo-1640773.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "September 14, 2023",
        author: "Dr. Amanda Lee",
        category: "Nutrition",
        url: "/blog-11/"
    },
    {
        id: 12,
        title: "Wendy's Through the Decades: A Visual History",
        excerpt: "See how Wendy's restaurants, menu, and branding have evolved from 1969 to today.",
        image: "https://images.pexels.com/photos/2983098/pexels-photo-2983098.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "August 5, 2023",
        author: "James Wilson",
        category: "Brand History",
        url: "/blog-12/"
    },
    {
        id: 13,
        title: "The Perfect Pairing: What to Drink with Your Wendy's Meal",
        excerpt: "Expert recommendations on beverage pairings that complement and enhance your favorite Wendy's menu items.",
        image: "https://images.pexels.com/photos/2983100/pexels-photo-2983100.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=1",
        date: "July 19, 2023",
        author: "Sophia Garcia",
        category: "Food Pairings",
        url: "/blog-13/"
    }
];

// Initialize the page
document.addEventListener('DOMContentLoaded', function() {
    // Check which page we're on
    const path = window.location.pathname;
    
    // Home page
    if (path === '/' || path === '/index.html') {
        loadTimeCategories();
        loadPopularItems();
        loadBlogPosts();
    }
    
    // Menu page
    else if (path.includes('/menu/')) {
        loadTimeCategories();
        loadMenuCategories();
        loadPopularItems();
        loadAllMenuItems();
        
        // Set up search and filter functionality
        document.getElementById('menu-search')?.addEventListener('input', function() {
            filterMenuItems();
        });
    }
    
    // Blog page
    else if (path.includes('/blog/') && !path.includes('/blog-')) {
        // Blog category filter functionality
        document.querySelectorAll('.category-btn')?.forEach(button => {
            button.addEventListener('click', function() {
                filterBlogByCategory(this.textContent.trim());
            });
        });
    }
    
    // Mobile menu functionality
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    }
    
    // Image gallery functionality for product pages
    initializeImageGallery();
    
    // Cookie consent
    initCookieConsent();
});

// Initialize image gallery functionality for product pages
function initializeImageGallery() {
    // Check if we're on a product page
    const mainImage = document.getElementById('main-image');
    const thumbnailButtons = document.querySelectorAll('.thumbnail-btn');
    
    if (mainImage && thumbnailButtons.length > 0) {
        // Set up click handlers for all thumbnail buttons
        thumbnailButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get the image source from the thumbnail's img element or data attribute
                const thumbnailImg = this.querySelector('img');
                let imageSrc = '';
                
                if (this.dataset.image) {
                    // Use data attribute if available
                    imageSrc = this.dataset.image;
                } else if (thumbnailImg) {
                    // Otherwise use the img src and convert to larger size
                    imageSrc = thumbnailImg.src.replace(/w=150&h=150/, 'w=600&h=600');
                }
                
                if (imageSrc) {
                    // Update main image
                    mainImage.src = imageSrc;
                    
                    // Update thumbnail borders
                    thumbnailButtons.forEach(btn => {
                        btn.classList.remove('border-wendy-red');
                        btn.classList.add('border-transparent');
                    });
                    
                    this.classList.remove('border-transparent');
                    this.classList.add('border-wendy-red');
                }
            });
        });
    }
}

// Image gallery functionality for product pages
function changeMainImage(imageSrc, thumbnailElement) {
    const mainImage = document.getElementById('main-image');
    if (mainImage) {
        mainImage.src = imageSrc;
        
        // Update thumbnail borders
        document.querySelectorAll('.thumbnail-btn').forEach(btn => {
            btn.classList.remove('border-wendy-red');
            btn.classList.add('border-transparent');
        });
        
        thumbnailElement.classList.remove('border-transparent');
        thumbnailElement.classList.add('border-wendy-red');
    }
}

// Load time-based menu categories
function loadTimeCategories() {
    const categoriesContainer = document.getElementById('main-menu-categories');
    if (!categoriesContainer) return;
    
    categoriesContainer.innerHTML = '';
    
    timeCategories.forEach(category => {
        const categoryCard = document.createElement('div');
        categoryCard.className = 'bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden';
        
        categoryCard.innerHTML = `
            <a href="/menu/#${category.id}" class="block no-underline">
                <div class="relative">
                    <img src="${category.image}" alt="${category.name} Menu" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="font-bold text-xl mb-1">${category.name}</h3>
                        <p class="text-sm text-gray-200 mb-2">${category.description}</p>
                        <div class="flex items-center text-xs bg-wendy-red bg-opacity-80 rounded-full px-3 py-1 inline-block">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            ${category.hours}
                        </div>
                    </div>
                </div>
            </a>
        `;
        
        categoriesContainer.appendChild(categoryCard);
    });
}

// Load popular menu items
function loadPopularItems() {
    const popularItemsGrid = document.getElementById('popular-items-grid');
    if (!popularItemsGrid) return;
    
    popularItemsGrid.innerHTML = '';
    
    const popularItems = menuItems.filter(item => item.popular);
    const itemsToShow = popularItems.slice(0, 4);
    
    itemsToShow.forEach(item => {
        const itemCard = document.createElement('div');
        itemCard.className = 'bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden';
        
        itemCard.innerHTML = `
            <a href="${item.detailUrl}" class="block no-underline">
                <div class="relative">
                    <img src="${item.image}" alt="${item.name}" class="w-full h-48 object-cover">
                    <div class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-bold flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        Popular
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-900 mb-2">${item.name}</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">${item.description}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-wendy-red font-bold text-lg">${item.price}</span>
                        <span class="text-gray-500 text-sm">${item.calories}</span>
                    </div>
                </div>
            </a>
        `;
        
        popularItemsGrid.appendChild(itemCard);
    });
}

// Load menu categories
function loadMenuCategories() {
    const categoryButtons = document.getElementById('category-buttons');
    if (!categoryButtons) return;
    
    categoryButtons.innerHTML = '';
    
    menuCategories.forEach(category => {
        const button = document.createElement('button');
        button.className = category.id === 'all' 
            ? 'category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-wendy-red text-white shadow-lg transform scale-105'
            : 'category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-white text-gray-700 hover:bg-red-50 hover:text-wendy-red shadow-md hover:shadow-lg';
        button.setAttribute('data-category', category.id);
        button.textContent = category.name;
        button.onclick = function() { filterByCategory(category.id); };
        
        categoryButtons.appendChild(button);
    });
}

// Load all menu items
function loadAllMenuItems() {
    const menuItemsGrid = document.getElementById('menu-items-grid');
    if (!menuItemsGrid) return;
    
    menuItemsGrid.innerHTML = '';
    
    menuItems.forEach(item => {
        const itemCard = document.createElement('div');
        itemCard.className = 'bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden menu-item-card menu-item';
        itemCard.setAttribute('data-category', item.category);
        itemCard.setAttribute('data-name', item.name.toLowerCase());
        itemCard.setAttribute('data-description', item.description.toLowerCase());
        
        itemCard.innerHTML = `
            <a href="${item.detailUrl}" class="block no-underline">
                <div class="relative">
                    <img src="${item.image}" alt="${item.name}" class="w-full h-48 object-cover" loading="lazy">
                    ${item.popular ? `
                        <div class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-bold flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            Popular
                        </div>
                    ` : ''}
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-900 mb-2">${item.name}</h3>
                    <p class="text-gray-600 text-sm mb-3 line-clamp-3">${item.description}</p>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-wendy-red font-bold text-lg">${item.price}</span>
                        <span class="text-gray-500 text-sm">${item.calories}</span>
                    </div>
                    <button class="w-full bg-wendy-red hover:bg-wendy-dark-red text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                        View Details
                    </button>
                </div>
            </a>
        `;
        
        menuItemsGrid.appendChild(itemCard);
    });
}

// Filter menu items by category
function filterByCategory(category) {
    const currentCategory = category;
    const items = document.querySelectorAll('.menu-item');
    const categoryBtns = document.querySelectorAll('.category-btn');
    const popularSection = document.getElementById('popular-section');
    const searchInput = document.getElementById('menu-search');
    
    // Update button styles
    categoryBtns.forEach(btn => {
        if (btn.dataset.category === category) {
            btn.className = 'category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-wendy-red text-white shadow-lg transform scale-105';
        } else {
            btn.className = 'category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-white text-gray-700 hover:bg-red-50 hover:text-wendy-red shadow-md hover:shadow-lg';
        }
    });
    
    // Show/hide popular section
    if (searchInput && searchInput.value === '') {
        if (popularSection) popularSection.style.display = 'block';
    } else {
        if (popularSection) popularSection.style.display = 'none';
    }
    
    filterMenuItems(category);
}

// Filter menu items by search and category
function filterMenuItems(category = null) {
    const items = document.querySelectorAll('.menu-item');
    const searchInput = document.getElementById('menu-search');
    const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
    const noResults = document.getElementById('no-results');
    const currentCategory = category || (document.querySelector('.category-btn.bg-wendy-red')?.dataset.category || 'all');
    
    let visibleCount = 0;
    
    items.forEach(item => {
        const itemCategory = item.dataset.category;
        const itemName = item.dataset.name;
        const itemDescription = item.dataset.description;
        
        const matchesCategory = currentCategory === 'all' || itemCategory === currentCategory;
        const matchesSearch = searchTerm === '' || 
                             itemName.includes(searchTerm) || 
                             itemDescription.includes(searchTerm);
        
        if (matchesCategory && matchesSearch) {
            item.style.display = 'block';
            visibleCount++;
        } else {
            item.style.display = 'none';
        }
    });
    
    if (noResults) {
        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }
    
    // Hide popular section if searching
    const popularSection = document.getElementById('popular-section');
    if (popularSection && searchTerm !== '') {
        popularSection.style.display = 'none';
    } else if (popularSection) {
        popularSection.style.display = 'block';
    }
}

// Filter blog posts by category
function filterBlogByCategory(category) {
    // This would be implemented to filter blog posts by category
    console.log('Filtering blog by category:', category);
    
    // Update active state for category buttons
    document.querySelectorAll('.category-btn').forEach(btn => {
        if (btn.textContent.trim() === category) {
            btn.classList.remove('bg-white', 'bg-opacity-20', 'text-white');
            btn.classList.add('bg-white', 'text-wendy-red');
        } else {
            btn.classList.remove('bg-white', 'text-wendy-red');
            btn.classList.add('bg-white', 'bg-opacity-20', 'text-white');
        }
    });
}

// Load blog posts
function loadBlogPosts() {
    const blogPostsGrid = document.getElementById('blog-posts-grid');
    if (!blogPostsGrid) return;
    
    blogPostsGrid.innerHTML = '';
    
    // Get the first 3 blog posts for the homepage
    const postsToShow = blogPosts.slice(0, 3);
    
    postsToShow.forEach(post => {
        const postCard = document.createElement('div');
        postCard.className = 'bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden';
        
        postCard.innerHTML = `
            <a href="${post.url}" class="block no-underline">
                <img src="${post.image}" alt="${post.title}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <span class="bg-wendy-red bg-opacity-10 text-wendy-red px-2 py-1 rounded-full text-xs font-medium">${post.category}</span>
                        <span class="mx-2">•</span>
                        <span>${post.date}</span>
                    </div>
                    <h3 class="font-bold text-xl text-gray-900 mb-2 line-clamp-2">${post.title}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">${post.excerpt}</p>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 font-medium text-sm mr-2">
                            ${post.author.charAt(0)}${post.author.split(' ')[1]?.charAt(0) || ''}
                        </div>
                        <span class="text-sm text-gray-600">${post.author}</span>
                    </div>
                </div>
            </a>
        `;
        
        blogPostsGrid.appendChild(postCard);
    });
}

// Toggle mobile menu
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (mobileMenu && menuIcon && closeIcon) {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
}

// Initialize cookie consent
function initCookieConsent() {
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptCookies = document.getElementById('accept-cookies');
    const declineCookies = document.getElementById('decline-cookies');
    
    // Check if user has already made a choice
    const cookieConsent = localStorage.getItem('cookie-consent');
    
    if (!cookieConsent && cookieBanner) {
        // Show banner after a short delay
        setTimeout(() => {
            cookieBanner.classList.remove('hidden');
        }, 2000);
        
        // Set up event listeners
        if (acceptCookies) {
            acceptCookies.addEventListener('click', () => {
                localStorage.setItem('cookie-consent', 'accepted');
                cookieBanner.classList.add('hidden');
                // Here you would initialize analytics, etc.
            });
        }
        
        if (declineCookies) {
            declineCookies.addEventListener('click', () => {
                localStorage.setItem('cookie-consent', 'declined');
                cookieBanner.classList.add('hidden');
            });
        }
    }
}