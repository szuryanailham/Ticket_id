import { Link } from "@inertiajs/react";
import React from "react";
function Navbar() {
    return (
        <div className="w-screen bg-blue-500">
            <ul>
                <li>
                    <Link href="#">Scedule</Link>
                </li>
                <li>
                    <Link href="#">Speaker</Link>
                </li>
                <li>
                    <Link href="#">Ticket</Link>
                </li>
                <li>
                    <Link href="#">Contact</Link>
                </li>
                {/* button */}
                <button>
                    <Link href="#">Button</Link>
                </button>
            </ul>
        </div>
    );
}

export default Navbar;
