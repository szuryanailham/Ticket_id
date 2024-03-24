import ConcertCard from "@/Components/ConcertCard";
import Navbar from "@/Components/Navbar";
import Paginator from "@/Components/Paginator";
import React from "react";

function HomePage({ concerts }) {
    return (
        <>
            <Navbar />
            <ConcertCard concerts={concerts} />
            <Paginator meta={concerts.meta} />
            <h2></h2>
        </>
    );
}

export default HomePage;
