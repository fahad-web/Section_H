import { AdminDtoReg, AdminLogin, AdminModifyDto } from "./admin.dto";
export declare class AdminService {
    regAdmin(adminRegInfo: AdminDtoReg): String;
    logAdmin(adminlogInfo: AdminLogin): string;
    showManagerInfoId(id: number): object;
    showTravelerInfoId(id: number): object;
    showTourGaid(id: number): object;
    delManagerById(id: number): string;
    modifyAdminData(modifyadmin: AdminModifyDto): String;
}
