import { Routes, Route } from "react-router-dom";
import Home from "./views/Home";
import PreviewPage from "./views/PreviewPage";
import Cart from "./views/Cart";
import PastOrders from "./views/PastOrders";

function App() {
    return (
        <>
            <Routes>
                <Route path="/" element={<PreviewPage />} />
                <Route path="/home" element={<Home />} />
                <Route path="/cart" element={<Cart />} />
                <Route path="/orders" element={<PastOrders />} />
            </Routes>
        </>
    );
}

export default App;
