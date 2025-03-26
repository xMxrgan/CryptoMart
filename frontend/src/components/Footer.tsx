import xLogo from "../assets/square-x-twitter-brands-solid.svg";
import telegram from "../assets/telegram-brands.svg";
import github from "../assets/github-brands.svg";

const Footer = () => {
    return (
        <footer className="flex w-full py-3">
            <div className="container mx-auto text-center">
                <div className="flex justify-center space-x-6">
                    <a
                        href="https://x.com/xMxrgan"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img
                            src={xLogo}
                            alt="X link"
                            className="w-10 h-10 hover:scale-110 transition-transform"
                        />
                    </a>
                    <a
                        href="https://t.me/xMxrgan"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img
                            src={telegram}
                            alt="Telegram link"
                            className="w-10 h-10 hover:scale-110 transition-transform"
                        />
                    </a>
                    <a
                        href="https://github.com/xMxrgan"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img
                            src={github}
                            alt="GitHub link"
                            className="w-10 h-10 hover:scale-110 transition-transform"
                        />
                    </a>
                </div>
            </div>
        </footer>
    );
};

export default Footer;
