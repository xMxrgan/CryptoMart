import { Link } from "react-router-dom";
import FullCartIcon from "../assets/cart-flatbed-suitcase-solid.svg";
import PastOrderIcon from "../assets/list-solid.svg";
import LogOutIcon from "../assets/right-from-bracket-solid.svg";

const Navbar = () => {
    return (
        <nav className="fixed top-0 left-0 w-full bg-gradient-to-r from-purple-300 via-pink-300 to-indigo-300 text-white p-4 shadow-md z-50">
            <div className="container mx-auto flex justify-between items-center max-w-screen-xl">
                {/* Titolo */}
                <Link to="/home">
                    <h1 className="text-2xl font-bold text-gray-800">
                        CryptoMart
                    </h1>
                </Link>

                {/* Link di navigazione */}
                <div className="flex items-center space-x-6">
                    <Link
                        to="/home"
                        className="text-gray-800 hover:text-gray-600 transition-colors"
                    >
                        <p className="text-gray-800 font-mono font-bold hover:text-gray-600 transition-colors">
                            HOME
                        </p>
                    </Link>
                    <Link
                        to="/about"
                        className="text-gray-800 hover:text-gray-600 transition-colors"
                    >
                        <p className="text-gray-800 font-mono font-bold hover:text-gray-600 transition-colors">
                            ABOUT
                        </p>
                    </Link>
                    <Link
                        to="/contact"
                        className="text-gray-800 hover:text-gray-600 transition-colors"
                    >
                        <p className="text-gray-800 font-mono font-bold hover:text-gray-600 transition-colors">
                            HELP
                        </p>
                    </Link>
                    {/*Icona degli ordini passati */}
                    <Link to="/pastOrders" className="ml-4 flex items-center">
                        <img
                            src={PastOrderIcon}
                            alt="Past orders logo"
                            className="w-6 h-6"
                        />
                    </Link>
                    {/* Icona del carrello */}
                    <Link
                        to="/cart"
                        className="relative ml-4 flex items-center group"
                    >
                        {/* Icona */}
                        <img
                            src={FullCartIcon}
                            alt="Cart icon"
                            className="w-6 h-6"
                        />
                        {/* Testo al passare del mouse */}
                        <span
                            className="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 px-2 py-1 text-xs
                                           text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity"
                        >
                            View your cart
                        </span>
                    </Link>

                    <Link to="/" className="ml-4 flex items-center">
                        <img
                            src={LogOutIcon}
                            alt="Log out icon"
                            className="w-6 h-6"
                        />
                    </Link>
                </div>
            </div>
        </nav>
    );
};

export default Navbar;
