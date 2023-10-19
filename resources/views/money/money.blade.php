@extends('base')

@section('content')
<h2>All Products and all brands</h2>
<style>
    .products-div {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        /* Add flex display to the container */
        /* flex-wrap: wrap; */
        /* Allow items to wrap to the next row if the container is too narrow */
        /* justify-content: space-between; */
        /* Distribute items evenly along the row */
    }

    .product-div {
        flex: 0 0 calc(20%);
        /* Make each product a flex item and set width to 25% minus margins */
        background-color: #f9f9f9;
        border: 1px solid #ddd;

        padding: 10px;
        text-align: center;
    }

    .product-div img {
        max-width: 100%;
        height: auto;
        border: 2px solid rgb(221, 187, 255);
        border-radius: 10px;
    }

    .product p {
        margin: 0;
    }

    .product_details {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .product_name {
        border-bottom: 1px solid rgb(192, 189, 189);
    }

    .product .price {
        font-weight: bold;
        color: #007bff;
        margin: 10px 0;
    }

    .price {
        border-radius: 5px;
        width: 60%;
        border: 1px solid rgb(12, 12, 88);
        padding: 10px;
        cursor: pointer;
    }

    .product button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    /* Add hover effect to the buttons */
    .product button:hover {
        background-color: #0056b3;
    }

    .product-div li {
        list-style-type: none;
    }
</style>
@endsection