import ConcertCard from "@/Components/ConcertCard";
import Paginator from "@/Components/Paginator";
import { Link } from "@inertiajs/react";
import Dropdown from "@/Components/Dropdown";
import React from "react";

function HomePage({ concerts }) {
    return (
        <>
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
