import ConcertCard from "@/Components/ConcertCard";
import Navbar from "@/Components/Navbar";
import Paginator from "@/Components/Paginator";
import React from "react";

function HomePage({ concerts, country, category, concert_list }) {
    return (
        <>
            <Navbar />
            <ConcertCard
                country={country}
                category={category}
                concerts={concerts}
                concert_list={concert_list}
            />
            <Paginator meta={concerts.meta} />
        </>
    );
}

export default HomePage;
