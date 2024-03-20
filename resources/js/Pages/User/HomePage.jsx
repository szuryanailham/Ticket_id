import ConcertCard from "@/Components/ConcertCard";
import Navbar from "@/Components/Navbar";
import Paginator from "@/Components/Paginator";
import { Link } from "@inertiajs/react";
import React from "react";

function HomePage({ concerts }) {
    return (
        <>
            <Navbar />
            <ConcertCard concerts={concerts} />
            <Paginator meta={concerts.meta} />
            <h2>
                <Link as="button" method="POST" href={"/logout"}>
                    Log Out
                </Link>
            </h2>
        </>
    );
}

export default HomePage;
