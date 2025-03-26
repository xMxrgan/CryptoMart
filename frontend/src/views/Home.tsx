import ItemWindow from "../components/ItemWindow";
import NavBar from "../components/NavBar";
import ProductCiuchino from "../assets/Ciuchino.jpg";

const Home = () => {
    return (
        <div>
            <NavBar />
            <ItemWindow
                product={{
                    id: "2",
                    title: "Ciuchino",
                    image: ProductCiuchino,
                    price: "69,99" + "€",
                }}
            />
        </div>
    );
};

export default Home;
