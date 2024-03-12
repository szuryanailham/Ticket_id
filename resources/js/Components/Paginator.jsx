import { Link } from "@inertiajs/react";
import React from "react";
function Paginator({ meta }) {
    const prev = meta.links[0].url;
    const current = meta.current_page;
    const next = meta.links[meta.links.length - 1].url;
    return (
        <div className="flex justify-evenly mt-10">
            <Link
                className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                href={prev}
            >
                prev
            </Link>
            <h1>{current}</h1>
            <Link
                className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                href={next}
            >
                next
            </Link>
        </div>
    );
}

export default Paginator;
