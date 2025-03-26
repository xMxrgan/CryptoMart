import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import App from "./App";

import "./css/Style.css";

ReactDOM.createRoot(document.getElementById("root")!).render(
    <React.StrictMode>
        <BrowserRouter>
            {/* Questo avvolge tutto! */}
            <App />
        </BrowserRouter>
    </React.StrictMode>,
);
