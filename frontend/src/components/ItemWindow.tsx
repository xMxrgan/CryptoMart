import { Link } from "react-router-dom";
import { useState } from "react";
import AddToCartIcon from "../assets/cart-plus-solid.svg";
import ProductExamplePic from "../assets/toca-boca.jpg"; // Immagine di default
import { Product } from "../Interfaces/Product";

const ItemWindow = ({ product }: { product: Product }) => {
    const [cart, setCart] = useState<Array<Product>>([]);

    const addToCart = (e: React.MouseEvent<HTMLButtonElement>) => {
        e.preventDefault(); // Evita che il click sul bottone navighi alla pagina prodotto
        setCart([...cart, product]);
        alert(`${product.title} aggiunto al carrello!`);
        // Da aggiungere al carrello effettivamente
    };

    return (
        <Link
            to={`/product/${product.id}`}
            className="block p-0 m-0  rounded-lg shadow-md hover:shadow-lg transition-shadow bg-red-200 w-60"
        >
            {/* Immagine del prodotto con fallback */}
            <div className="h-40 flex justify-center items-center w-auto">
                <img
                    src={product.image || ProductExamplePic}
                    alt={product.title || "No Product"}
                    className="max-h-full max-w-full object-contain"
                />
            </div>

            {/* Titolo */}
            <h2 className="mt-2 text-lg font-semibold text-gray-900">
                {product.title || "Name of the product"}
            </h2>
            <div>
                <button>
                    <p className="w-full bg-purple-300 text-gray-800 py-3 rounded-lg text-lg font-semibold hover:bg-purple-400 transition-colors mb-4"></p>
                </button>

                {/* Bottone "Aggiungi al carrello" */}
                <button
                    onClick={addToCart}
                    className="mt-3 w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition relative group flex items-center justify-center gap-2"
                >
                    <img
                        src={AddToCartIcon}
                        alt="Add item to cart icon"
                        className="h-5"
                    />

                    {/* Tooltip */}
                    <span
                        className="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 px-2 py-1 text-xs
                          text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity"
                    >
                        Aggiungi al carrello
                    </span>
                </button>
            </div>
        </Link>
    );
};

export default ItemWindow;
