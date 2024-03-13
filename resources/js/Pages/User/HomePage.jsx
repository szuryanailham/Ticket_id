import ConcertCard from "@/Components/ConcertCard";
import Paginator from "@/Components/Paginator";
import { Button } from "@/Components/ui/button";
import React from "react";
function HomePage({ concerts }) {
    return (
        <>
            <ConcertCard concerts={concerts} />
            <Paginator meta={concerts.meta} />
        </>
    );
}

export default HomePage;
