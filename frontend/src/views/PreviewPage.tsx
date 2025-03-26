import { useNavigate } from "react-router-dom";
import Footer from "../components/Footer";

const PreviewPage = () => {
    const navigate = useNavigate();

    const handleLoginButton = () => {
        alert("Not yet implemented :(");
        // navigate("/login");
    };
    const handleRegisterButton = () => {
        alert("Not yet implemented :(");
        // navigate("/register");
    };
    const handleContinueButton = () => {
        navigate("/home");
    };

    return (
        <>
            <div className="flex items-center justify-center min-h-screen bg-gradient-to-r from-purple-200 via-pink-200 to-indigo-200 p-6">
                <div>
                    <div className="bg-zinc-50 p-8 rounded-lg shadow-lg w-full ">
                        <h2 className="text-3xl font-semibold text-center text-gray-800 mb-4">
                            Welcome to
                        </h2>
                        <h1 className="text-3xl font-semibold text-center text-gray-800 mb-4">
                            CryptoMart
                        </h1>
                        <h3 className="text-lg text-center text-gray-600 mb-6">
                            Login or sign up for access
                        </h3>

                        <button
                            className="w-full bg-purple-300 text-gray-800 py-3 rounded-lg text-lg font-semibold hover:bg-purple-400 transition-colors mb-4"
                            onClick={handleLoginButton}
                        >
                            Login
                        </button>
                        <button
                            className="w-full bg-purple-300 text-gray-800 py-3 rounded-lg text-lg font-semibold hover:bg-purple-400 transition-colors mb-4"
                            onClick={handleRegisterButton}
                        >
                            Register
                        </button>
                        <p
                            className="w-full text-center bg-gray-200 text-gray-800 py-3 rounded-lg text-lg font-semibold hover:bg-gray-300 transition-colors cursor-pointer"
                            onClick={handleContinueButton}
                        >
                            Continue as a guest
                        </p>
                    </div>
                    <Footer />
                </div>
            </div>
        </>
    );
};

export default PreviewPage;
